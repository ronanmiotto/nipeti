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
		$data = $_POST;
		if ($data['senha'] == $data['confirma_senha']){
			$data['senha'] = sha1($_POST['senha']);
			$this->user->create($data);
			$this->session->set_flashdata('message', 'Cadastrado com sucesso');
			redirect('/user');
		} else {
			$this->session->set_flashdata('danger', 'Senhas não são iguais');
			$data['user'] = (object) $_POST;
			$this->load->view('user/edit', $data);
		}
	}

	public function update(){
		$data = $_POST;
		if (!empty($data['senha'])){
			$data['senha'] = sha1($_POST['senha']);
		} else {
			unset($data['senha']);
		}

		$this->user->update($data, $data['idUsuario']);
		$this->session->set_flashdata('message', 'Atualizado com sucesso');
		redirect('/user');
	}

	public function edit(){
		$data['user'] = $this->user->find($_GET['idUsuario']);
		$this->load->view('user/edit_user', $data);
	}

	public function show(){
		$data['user'] = $this->user->find($_GET['idUsuario']);
		$this->load->view('user/show_user', $data);
	}

	public function destroy(){
		$this->user->destroy($_GET['idUsuario']);
		$this->session->set_flashdata('message', 'Deletado com sucesso');
		redirect('/user');
	}
}
