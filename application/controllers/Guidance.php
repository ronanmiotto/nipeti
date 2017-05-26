<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guidance extends CI_Controller {

	public function index(){
		$this->logged_in();
		$data['guidances'] = $this->guidance->all();
		$this->load->view('/guidance/index', $data);
	}

	public function new_guidance(){
		$data['projects'] = $this->project->all();
		$data['teachers'] = $this->user->get_by(1);
		$data['students'] = $this->user->get_by(2);
		$this->load->view('/guidance/new_guidance', $data);
	}

	public function create(){
		$data = $_POST;
		$this->guidance->create($data);
		$this->session->set_flashdata('message', 'Cadastrado com sucesso');
		redirect('/guidance/index');
	}

	public function update(){
		$this->guidance->update($data, $data['idOrientacao']);

		$this->session->set_flashdata('message', 'Atualizado com sucesso');
		redirect('/guidance/index');
	}

	public function edit(){
		$data['projects'] = $this->guidance->all();
		$data['guidance'] = $this->guidance->find($_GET['idOrientacao']);
		$this->load->view('/guidance/edit', $data);
	}

	public function show(){
		$data['guidance'] = $this->guidance->find($_GET['idOrientacao']);
		$this->load->view('/guidance/show', $data);
	}

	public function destroy(){
		$this->guidance->destroy($_GET['idOrientacao']);
		$this->session->set_flashdata('message', 'Deletado com sucesso');
		redirect('/guidance/index');
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
