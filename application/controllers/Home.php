<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		not_login();
	}

	public function index()
	{
		$data = [
			'title'	=> 'Home',
			'isi'	=> 'home'
		];
		$this->load->view('layouts/wrap', $data, false);
	}
}
