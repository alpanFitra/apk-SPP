<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url() . 'login/';
			redirect($url);
		}
		$this->load->model('model_laporan');
	}

	public function index()
	{
		$cek_user_level = $this->session->userdata('akses');

		if ($cek_user_level == 'admin') {
			if ($this->input->post('tampilkan')) {
				$idtahun = $this->input->post('pilihtahun');
				$idbulan = $this->input->post('pilihbulan');
				$idtanggal = $this->input->post('pilihtanggal');

				if ($idbulan == "" && $idtanggal == "") {
					$data['judullap'] = array('pesan' => 'TAHUN ' . $idtahun);
					$data['laporan'] = $this->model_laporan->tampilall($idtahun);
					$data['sum'] = $this->model_laporan->sum($idtahun);
					$this->load->view('laporancetak', $data);
				}elseif ($idtanggal == "") {
					$data['judullap'] = array('pesan' => ' BULAN ' . $idbulan . ' TAHUN ' . $idtahun);
					$data['laporan'] = $this->model_laporan->tampilpertanggal($idtahun,$idbulan);
					$data['sum'] = $this->model_laporan->sumpertanggal($idtahun,$idbulan);
					$this->load->view('laporancetak', $data);	
				}elseif ($idbulan == "") {
					$data['judullap'] = array('pesan' => ' TANGGAL ' . $idtanggal . ' TAHUN ' . $idtahun);
					$data['laporan'] = $this->model_laporan->tampilperbulan($idtahun,$idtanggal);
					$data['sum'] = $this->model_laporan->sumperbulan($idtahun,$idtanggal);
					$this->load->view('laporancetak', $data);
				} else {
					$data['judullap'] = array('pesan' => ' TANGGAL ' . $idtanggal . ' BULAN ' . $idbulan . ' TAHUN ' . $idtahun);
					$data['laporan'] = $this->model_laporan->tampilper($idtahun, $idbulan, $idtanggal);
					$data['sum'] = $this->model_laporan->sumper($idtahun, $idbulan,$idtanggal);
					$this->load->view('laporancetak', $data);
				}
			} else {
				$data['tahun'] = $this->model_laporan->caritahun();
				$this->load->view('laporan', $data);
			}
		} else {
			redirect('notfound');
		}
	}
}
