<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$data['users'] = $this->user->all();
		$this->load->view('user/index', $data);
	}

	public function new_user(){
		$this->load->view('user/new_user');
	}

	public function create(){
		$this->user->create($_POST);
		$this->session->set_flashdata('message', 'cadastrado com sucesso');
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
}
