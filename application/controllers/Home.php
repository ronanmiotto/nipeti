<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->logged_in();
		$this->load->view('home/index');
	}

	private function logged_in(){
    $this->session->userdata('logged_in') == true && $this->session->userdata('adm') == true ? '' : redirect('/login/index');
  }
}
