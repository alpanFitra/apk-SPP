<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    //cek username dan password petugas
	function auth_users($username,$password){
		$query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}
	
	//cek username nisn siswa
	function auth_siswa($username){
		$query=$this->db->query("SELECT * FROM siswa WHERE nisn='$username' LIMIT 1");
		return $query;
	}

}
