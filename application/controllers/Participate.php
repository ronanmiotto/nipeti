<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participate extends CI_Controller {

	public function index(){
		$this->logged_in();
		$data['participates'] = $this->participate->all();
		$this->load->view('/participate/index', $data);
	}

	public function new_participate(){
		$data['users'] = $this->user->all();
		$data['projects'] = $this->project->all();
		$this->load->view('/participate/new_participate', $data);
	}

	public function create(){
		$data = $_POST;
		$this->participate->create($data);
		$this->session->set_flashdata('message', 'Cadastrado com sucesso');
		redirect('/participate/index');
	}

	public function update(){
		$data = $_POST;
		$this->participate->update($data, $_POST['idParticipa']);
		$data['users'] = $this->user->all();
		$data['projects'] = $this->project->all();

		$this->session->set_flashdata('message', 'Atualizado com sucesso');
		redirect('/participate/index');
	}

	public function edit(){
		$data['projects'] = $this->project->all();
		$data['users'] = $this->user->all();
		$data['participate'] = $this->participate->find($_GET['idParticipa']);
		$this->load->view('/participate/edit', $data);
	}

	public function show(){
		$data['projects'] = $this->project->all();
		$data['users'] = $this->user->all();
		$data['participate'] = $this->participate->find($_GET['idParticipa']);
		$this->load->view('/participate/show', $data);
	}

	public function destroy(){
		$this->participate->destroy($_GET['idParticipa']);
		$this->session->set_flashdata('message', 'Deletado com sucesso');
		redirect('/participate/index');
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
