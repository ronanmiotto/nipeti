<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index(){
		$data['projects'] = $this->project->all();
		$this->load->view('/project/new_project', $data);
	}

	public function new_project(){
		$this->load->view('/project/new_project');
	}


}
