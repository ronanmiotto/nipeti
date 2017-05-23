<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index(){
		$this->logged_in();
		$data['projects'] = $this->project->all();
		$this->load->view('project/index', $data);
	}

	public function new_project(){
		$data['teachers'] = $this->user->get_by(1);
		$data['students'] = $this->user->get_by(2);
		$this->load->view('project/new_project', $data);
	}

	public function create(){
		$data = $_POST;
		$this->send_file($data);
		$data['arquivo'] = $this->upload->data('file_name');
		$this->project->create($data);
		$this->session->set_flashdata('message', 'Cadastrado com sucesso');
		redirect('/project');
	}

	public function update(){
		$data = $_POST;
		if (!empty($data['senha'])){
			$data['senha'] = sha1($_POST['senha']);
		} else {
			unset($data['senha']);
		}

		$this->send_file($data);
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

	public function send_file($data) {
	  $config['upload_path']          = '/home/ronanmiotto/php/nipeti/projects/';
	  $config['allowed_types']        = 'pdf|doc|docx';
		$config['encrypt_name	'] 				= true;

	  $this->load->library('upload', $config);

		$this->upload->initialize($config);

	  if ( ! $this->upload->do_upload('arquivo')) {
	    $error = array('error' => $this->upload->display_errors());
	    $this->load->view('upload_form', $error);
	  }
  }

	private function logged_in(){
    $this->session->userdata('logged_in') == true ? '' : redirect('/login/index');
  }

	private function students(){
		// 1: professor 2: estudante
		return $this->user->get_by(2);
	}
}
