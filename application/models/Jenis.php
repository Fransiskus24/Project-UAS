<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Model
{
	public function getJenis()
	{
		return $this->db->get('jenis_perawatan')->result();
	}
}
