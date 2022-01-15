<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawat extends CI_Model
{
	public function getRawat()
	{
		$query = 'jenis_perawatan.nama as jenis_nama, perawatan.id, perawatan.nama, perawatan.tanaman_id, tanaman.nama as tanaman_nama';
		$this->db->select($query);
		$this->db->from('perawatan');
		$this->db->join('jenis_perawatan', 'jenis_perawatan.id = perawatan.jenisperawatan_id', 'left');
		$this->db->join('tanaman', 'tanaman.id = perawatan.tanaman_id', 'left');
		return $this->db->get()->result();
	}
	public function findRawat($id)
	{
		$query = 'jenis_perawatan.id as jenis_id, jenis_perawatan.nama as jenis_nama, perawatan.id, perawatan.nama, perawatan.tanaman_id, tanaman.id as tanam_id, tanaman.nama as tanaman_nama';
		$this->db->select($query);
		$this->db->from('perawatan');
		$this->db->join('jenis_perawatan', 'jenis_perawatan.id = perawatan.jenisperawatan_id', 'left');
		$this->db->join('tanaman', 'tanaman.id = perawatan.tanaman_id', 'left');
		$this->db->where('perawatan.id', $id);
		return $this->db->get()->row();
	}

	public function insertRawat($data)
	{
		return $this->db->insert('perawatan', $data);
	}
	public function updateRawat($data, $id)
	{
		return $this->db->update('perawatan', $data, ['id' => $id]);
	}
	public function deleteRawat($id)
	{
		return $this->db->delete('perawatan', ['id' => $id]);
	}
}
