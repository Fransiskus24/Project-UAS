<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
	public function getUsers()
	{
		return $this->db->get('users')->result();
	}

	public function saveUser($data)
	{
		return $this->db->insert('users', $data);
	}
	public function auth_login($auth_user)
	{
		return $this->db->get_where('users', ['id' => $auth_user])->row();
	}
}
