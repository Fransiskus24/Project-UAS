<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		not_login();
	}

	public function index()
	{
		$data = [
			'title'	=> 'Perawatan',
			'isi'	=> 'page/perawatan/index',
			'perawatans'	=> $this->rawat->getRawat()
		];
		$this->load->view('layouts/wrap', $data, false);
	}

	public function create()
	{
		$data = [
			'title'	=> 'Perawatan',
			'jenis'	=> $this->jenis->getJenis(),
			'tanaman'	=> $this->tanam->getTanam(),
			'isi'	=> 'page/perawatan/create',
		];
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('tanaman', 'Tanaman', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/wrap', $data, false);
		} else {
			$this->rawat->insertRawat([
				'nama'	=> $this->input->post('nama', true),
				'jenisperawatan_id'	=> $this->input->post('jenis', true),
				'tanaman_id'		=> $this->input->post('tanaman', true)
			]);
			redirect('perawatan');
		}
	}
	public function edit($id)
	{
		$data = [
			'title'	=> 'Perawatan',
			'jenis'	=> $this->jenis->getJenis(),
			'tanaman'	=> $this->tanam->getTanam(),
			'perawatan'	=> $this->rawat->findRawat($id),
			'isi'	=> 'page/perawatan/edit',
		];
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('tanaman', 'Tanaman', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/wrap', $data, false);
		} else {
			$this->rawat->updateRawat([
				'nama'	=> $this->input->post('nama', true),
				'jenisperawatan_id'	=> $this->input->post('jenis', true),
				'tanaman_id'		=> $this->input->post('tanaman', true)
			], $id);
			redirect('perawatan');
		}
	}

	public function delete($id)
	{
		$this->rawat->deleteRawat($id);
		redirect('perawatan');
	}
}
