<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$this->load->view('user/index');
	}

	public function new_user(){
		$this->load->view('user/new_estudant');
	}

	public function new_user2(){
		$this->load->view('user/new_server');
	}
}
