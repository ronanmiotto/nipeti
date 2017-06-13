<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends CI_Controller {

	public function index(){
		$this->logged_in();
		$data['type'] = $this->session->userdata('type');
		$data['publications'] = $this->publication->all();
		$this->load->view('publication/index', $data);
	}

	public function new_publication(){
		$data['projects'] = $this->project->all();
		$this->load->view('publication/new_publication', $data);
	}

	public function create(){
		$data = $_POST;
		$this->session->set_flashdata('message', 'Cadastrado com sucesso');
		$this->publication->create($data);
		redirect('/publication/index');
	}

	public function update(){
		$data = $_POST;
		$this->publication->update($data, $data['idPublicacao']);
		$this->session->set_flashdata('message', 'Atualizado com sucesso');
		redirect('/publication');
	}

	public function edit(){
		$data['projects'] = $this->project->all();
		$data['publication'] = $this->publication->find($_GET['idPublicacao']);
		$this->load->view('/publication/edit', $data);
	}

	public function show(){
		$data['publication'] = $this->publication->find($_GET['idPublicacao']);
		$data['project'] = $this->project->find($data['publication']->projeto_idProjeto);
		$this->load->view('publication/show', $data);
	}

	public function destroy(){
		$this->publication->destroy($_GET['idPublicacao']);
		$this->session->set_flashdata('message', 'Deletado com sucesso');
		redirect('/publication');
	}

	public function send_image($data) {
	  $config['upload_path']          = '/home/ronanmiotto/php/nipeti/images/users/';
	  $config['allowed_types']        = 'gif|jpg|png';
	  $config['max_size']             = 100;
	  $config['max_width']            = 1024;
	  $config['max_height']           = 768;
		$config['encrypt_name'] 				= true;

	  $this->load->library('upload', $config);

		$this->upload->initialize($config);

	  if ( ! $this->upload->do_upload('imagem')) {
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
