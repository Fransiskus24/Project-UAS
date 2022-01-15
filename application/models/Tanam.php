<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanam extends CI_Model
{
	public function getTanam()
	{
		return $this->db->get('tanaman')->result();
	}
	public function findTanaman($id)
	{
		return $this->db->get_where('tanaman', ['id' => $id])->row();
	}
	public function insertTanaman($data)
	{
		return $this->db->insert('tanaman', $data);
	}
	public function updateTanaman($data, $id)
	{
		return $this->db->update('tanaman', $data, ['id' => $id]);
	}

	public function deleteTanaman($id)
	{
		return $this->db->delete('tanaman', ['id' => $id]);
	}
}
