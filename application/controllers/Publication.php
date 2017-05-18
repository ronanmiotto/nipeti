<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends CI_Controller {

	public function index(){
		$this->logged_in();
		$data['publications'] = $this->publication->all();
		$this->load->view('publication/index', $data);
	}

	public function new_publication(){
		$this->load->view('publication/new_publication');
	}

	public function create(){
		$data = $_POST;
		$data['students'] = $this->students();
		$this->session->set_flashdata('message', 'Cadastrado com sucesso');
		$this->project->create($data);
		redirect('/publication');
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

	private function students(){
		// 1: professor 2: estudante
		return $this->user->get_by(2);
	}
}
