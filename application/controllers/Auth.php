<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	userlogin();
	// }

	public function login()
	{
		userlogin();
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$email = $this->input->post('email', true);
		$pass = $this->input->post('password', true);
		$userlog = $this->db->get_where('users', ['email' => $email])->row();
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			if ($userlog) {
				if (password_verify($pass, $userlog->password)) {
					$data = [
						'id'        => $userlog->id,
						'email'  => $userlog->email
					];
					$this->session->set_userdata($data);
					redirect('home');
				} else {
					$this->session->set_flashdata('login', '<div class="alert alert-danger" role="alert">
					Password Salah
					</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('login', '<div class="alert alert-danger" role="alert">
				Email Salah
				</div>');
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('login', '<div class="alert alert-success" role="alert">
				Berhasil Logout
				</div>');
		redirect('login');
	}
}
