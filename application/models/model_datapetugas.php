<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_datapetugas extends CI_Model
{

	public function all()
	{
		return $this->db->get('petugas');
	}

	public function insert($data)
	{
		return $this->db->insert('petugas', $data);
	}

	public function getwhere($where)
	{
		$this->db->where($where);
		return $this->db->get('petugas');
	}

	public function update($data, $where)
	{
		$this->db->where($where);
		return $this->db->update('petugas', $data);
	}

	public function delete($where)
	{
		return $this->db->delete('petugas',$where);
	}
}
