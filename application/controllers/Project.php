<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index(){
		$this->logged_in();
		if ($this->session->userdata('type') == 1) {
			$data['projects'] = $this->project->all();
		} else {
			$id = $this->session->userdata('id');
			$data['projects'] = $this->project->get_by_student($id);
		}
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
		redirect('/project/index');
	}

	public function update(){
		$data = $_POST;
		if (!empty($data['senha'])){
			$data['senha'] = sha1($_POST['senha']);
		} else {
			unset($data['senha']);
		}

		$this->send_file($data);
		$data['arquivo'] = $this->upload->data('file_name');

		$this->project->update($data, $data['idProjeto']);

		$this->session->set_flashdata('message', 'Atualizado com sucesso');
		redirect('/project/index');
	}

	public function edit(){
		$data['project'] = $this->project->find($_GET['idProjeto']);
		$this->load->view('project/edit', $data);
	}

	public function show(){
		$data['users'] = $this->user->all();
		$data['project'] = $this->project->find($_GET['idProjeto']);
		$data['participates'] = $this->project->participates($_GET['idProjeto']);
		$this->load->view('project/show', $data);
	}

	public function destroy(){
		$this->project->destroy($_GET['idProjeto']);
		$this->session->set_flashdata('message', 'Deletado com sucesso');
		redirect('/project/index');
	}

	public function send_file($data) {
	  $config['upload_path']          = '/home/ronanmiotto/php/nipeti/projects/';
	  $config['allowed_types']        = 'pdf|doc|docx';
		$config['encrypt_name'] 				= true;

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
