<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url() . 'login';
			redirect($url);
		}
		$this->load->model('model_home');
	}
	public function index()
	{
		$cek_user_level = $this->session->userdata('akses');

		if ($cek_user_level == 'admin' or $cek_user_level == 'petugas') {
			$data['totalsiswa'] = $this->model_home->totalsiswa();
			$data['totalkelas'] = $this->model_home->totalkelas();
			$data['totalpembayaran'] = $this->model_home->totalpembayaran();
			$data['statistik'] = $this->model_home->statpembayar();
			$this->load->view('home', $data);
		} else {
			redirect('notfound');
		}
	}
}
