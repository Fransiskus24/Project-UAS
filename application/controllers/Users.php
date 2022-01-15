<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		not_login();
	}

	public function index()
	{
		$data = [
			'title'	=> 'Users',
			'isi'	=> 'page/user/index',
			'users'	=> $this->user->getUsers()
		];
		$this->load->view('layouts/wrap', $data, false);
	}

	public function create()
	{
		$data = [
			'title'	=> 'Users | Create',
			'isi'	=> 'page/user/create'
		];
		$this->load->view('layouts/wrap', $data, false);
	}
	public function store()
	{
		$data = ['isi' => 'page/user/create'];
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/wrap', $data, false);
		} else {
			$this->user->saveUser([
				'email'	=> $this->input->post('email', true),
				'password'	=> password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
				'avatar'	=> 'avatar',
			]);

			redirect('users');
		}
	}

	public function login()
	{
		// 
	}
}
