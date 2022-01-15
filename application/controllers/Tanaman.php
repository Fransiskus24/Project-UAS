<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanaman extends CI_Controller
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
			'tanamans'	=> $this->tanam->getTanam(),
			'isi'	=> 'page/tanaman/index'
		];
		$this->load->view('layouts/wrap', $data, false);
	}

	public function create()
	{
		$data = [
			'title'	=> 'Tanaman | Create',
			'isi'	=> 'page/tanaman/create'
		];
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('variates', 'Variates', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/wrap', $data, false);
		} else {
			$this->tanam->insertTanaman([
				'tanggal'	=> $this->input->post('tanggal', true),
				'nama'		=> $this->input->post('nama', true),
				'variates'	=> $this->input->post('variates', true),
				'lokasi'	=> $this->input->post('lokasi', true)
			]);
			redirect('tanaman');
		}
	}

	public function edit($id)
	{
		$data = [
			'title'	=> 'Tanaman | Edit',
			'tanaman'	=> $this->tanam->findTanaman($id),
			'isi'	=> 'page/tanaman/edit'
		];
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('variates', 'Variates', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/wrap', $data, false);
		} else {
			$this->tanam->updateTanaman([
				'tanggal'	=> $this->input->post('tanggal', true),
				'nama'		=> $this->input->post('nama', true),
				'variates'	=> $this->input->post('variates', true),
				'lokasi'	=> $this->input->post('lokasi', true)
			], $id);
			redirect('tanaman');
		}
	}

	public function delete($id)
	{
		$this->tanam->deleteTanaman($id);
		redirect('tanaman');
	}
}
