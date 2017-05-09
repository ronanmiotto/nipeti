<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$this->logged_in();

		$config['base_url'] = '/user';
		$config['total_rows'] = $this->user->count();
		$config['page_query_string'] = true;
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = '&laquo;';
		$config['first_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='javascript:void(0)'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['last_tag_open'] = '<li>';
		$config['last_link'] = '&raquo;';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_link'] = '&rsaquo;';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_link'] = '&lsaquo;';
		$config['prev_tag_close'] = '</li>';
		$config['full_tag_open'] = '<div class="text-center"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$this->pagination->initialize($config);
		$page = isset($_GET['per_page']) ? $_GET['per_page'] : 0;

		$data['users'] = $this->user->all($page, 15);

		$data['paginate'] = $this->pagination->create_links();
		$this->load->view('user/index', $data);
	}

	public function new_user(){
		$this->load->view('user/new_user');
	}

	public function create(){
		$data = $_POST;
		if ($data['senha'] == $data['confirma_senha']){
			$data['senha'] = sha1($_POST['senha']);
			unset($data['confirma_senha']);

			$this->send_image($data);
			$data['imagem'] = $this->upload->data('file_name');

			$this->session->set_flashdata('message', 'Cadastrado com sucesso');
			$this->user->create($data);
			redirect('/user');
		} else {
			$this->session->set_flashdata('danger', 'Senhas não são iguais');
			$data['user'] = (object) $_POST;
			$this->load->view('user/new_user', $data);
		}
	}

	public function update(){
		$data = $_POST;
		if (!empty($data['senha'])){
			$data['senha'] = sha1($_POST['senha']);
		} else {
			unset($data['senha']);
		}

		$this->send_image($data);
		$data['imagem'] = $this->upload->data('file_name');

		$this->user->update($data, $data['idUsuario']);

		$this->session->set_flashdata('message', 'Atualizado com sucesso');
		redirect('/user');
	}

	public function edit(){
		$data['user'] = $this->user->find($_GET['idUsuario']);
		$this->load->view('user/edit', $data);
	}

	public function show(){
		$data['user'] = $this->user->find($_GET['idUsuario']);
		$this->load->view('user/show', $data);
	}

	public function destroy(){
		$this->user->destroy($_GET['idUsuario']);
		$this->session->set_flashdata('message', 'Deletado com sucesso');
		redirect('/user');
	}

	public function send_image($data) {
	  $config['upload_path']          = '/home/ronanmiotto/php/nipeti/images/users/';
	  $config['allowed_types']        = 'gif|jpg|png';
	  $config['max_size']             = 100;
	  $config['max_width']            = 1024;
	  $config['max_height']           = 768;
		$config['encrypt_name	'] 				= true;

	  $this->load->library('upload', $config);

		$this->upload->initialize($config);

	  if ( ! $this->upload->do_upload('imagem')) {
	    $error = array('error' => $this->upload->display_errors());
	    $this->load->view('upload_form', $error);
	  }
  }

	public function logoff(){
		$array = array('email', 'logged_in');
		$this->session->unset_userdata($array);
		$this->session->set_flashdata('message', 'Deslogado com sucesso');
		redirect('/login/index');
	}

	private function logged_in(){
    $this->session->userdata('logged_in') == true && $this->session->userdata('adm') == true ? '' : redirect('/login/index');
  }

	public function check_login(){
		$user = $this->user->check_login($_POST);
		$this->create_session_for_user($user);
	}

	private function create_session_for_user($user){
		if (isset($user->email)){
			$newdata = array('email' => $user->email, 'logged_in' => true, 'adm' => true);
			$this->session->set_userdata($newdata);
			$this->session->set_flashdata('message', 'Logado com sucesso');
			redirect('/home/index');
		} else {
			$this->session->set_flashdata('message', 'Usuário não cadastrado');
			$this->logged_in();
		}
	}
}
