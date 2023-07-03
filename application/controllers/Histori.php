
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Histori extends CI_Controller {

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url().'login/';
				redirect($url);
		}
		$this->load->model('model_histori');
	}
	
	public function index(){
		$cek_user_level = $this->session->userdata('akses');
		$cek_user_nisn = $this->session->userdata('ses_id');
		
		if($cek_user_level == 'siswa'){
			$data['satu'] = $this->model_histori->datasiswa($cek_user_nisn)->row_array();
			$data['databayar'] = $this->model_histori->databayar($cek_user_nisn);
			$this->load->view('histori',$data);
		}
		else{
			redirect('notfound');
		}
	}
}
