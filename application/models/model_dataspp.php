<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dataspp extends CI_Model {
	public function all(){
		return $this->db->get('spp');
	}

	public function insert($data){
		return $this->db->insert('spp',$data);
	}

	public function getwhere($where){
		$this->db->where($where);
		return $this->db->get('spp');
	}

	public function update($data,$where){
		$this->db->where($where);
		return $this->db->update('spp',$data);
	}
	
	public function delete($where){
		return $this->db->delete('spp',$where);
	}
}
