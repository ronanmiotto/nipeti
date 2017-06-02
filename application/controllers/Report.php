<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index(){
		$this->logged_in();
		$data['report'] = $this->project->all();
		$this->load->view('report/index', $data);
	}

	public function new_report_user(){
		$data['teachers'] = $this->user->get_by(1);
		$data['students'] = $this->user->get_by(2);
		$this->load->view('report/new_report_user', $data);
	}

	public function new_report_project(){
		$data['projects'] = $this->project->all();
		$this->load->view('report/new_report_project');
	}

	public function new_report_guidance(){
		$data['guidances'] = $this->guidance->all();
		$this->load->view('report/new_report_guidance');
	}

	public function new_report_publication(){
		$data['publications'] = $this->publication->all();
		$this->load->view('report/new_report_publication');
	}

	public function create(){
		$data = $_POST;
		$data['students'] = $this->students();
		$this->session->set_flashdata('message', 'Cadastrado com sucesso');
		$this->project->create($data);
		redirect('/project');
	}

	public function show(){
		$data['user'] = $this->user->find($_GET['idUsuario']);
		$this->load->view('user/show', $data);
	}

	public function logoff(){
		$array = array('email', 'logged_in');
		$this->session->unset_userdata($array);
		$this->session->set_flashdata('message', 'Deslogado com sucesso');
		redirect('/login/index');
	}

	private function logged_in(){
    $this->session->userdata('logged_in') == true ? '' : redirect('/login/index');
  }

}
