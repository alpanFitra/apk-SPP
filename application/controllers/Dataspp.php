<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataspp extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url() . 'login/';
			redirect($url);
		}
		$this->load->model('model_dataspp');
	}

	public function index()
	{
		$cek_user_level = $this->session->userdata('akses');

		if ($cek_user_level == 'admin') {
			$data['semua'] = $this->model_dataspp->all();
			$this->load->view('spp/dataspp', $data);
		} else {
			redirect('notfound');
		}
	}
	public function form()
	{
		$cek_user_level = $this->session->userdata('akses');

		if ($cek_user_level == 'admin') {
			$this->form_validation->set_rules('tahun', 'Tahun', 'required|min_length[2]|max_length[11]|numeric|is_unique[spp.tahun]', ['required' => 'Tahun Wajib diisi!','min_length' => 'Tahun minimal 2 huruf','max_length' => 'Tahun Maksimal 11 huruf','numeric' => 'Harus Berupa Angka','is_unique' => 'Tahun Telah Terdaftar']);
			$this->form_validation->set_rules('nominal', 'Nominal', 'required|min_length[2]|max_length[11]|numeric', ['required' => 'Nominal Wajib diisi!','min_length' => 'Nominal minimal 2 huruf','max_length' => 'Nominal Maksimal 11 huruf','numeric' => 'Harus Berupa Angka']);

			if ($this->form_validation->run() == TRUE) {
				//masukkan data POST ke dalam variabel $array
				$array = array(
					'tahun' => $this->input->post('tahun'),
					'nominal' => $this->input->post('nominal'),
				);
				//panggil method insert pada Model model_dataspp
				$this->model_dataspp->insert($array);
				//kembali ke daftar tabel
				$url = base_url() . 'dataspp/';
				redirect($url);
			} else {
				$data['satu'] = array(
					'tahun' => $this->input->post('tahun'),
					'nominal' => $this->input->post('nominal'),
				);
				$this->load->view('spp/datasppform', $data);
			}
		} else {
			redirect('notfound');
		}
	}
	public function formedit()
	{
		$cek_user_level = $this->session->userdata('akses');

		if ($cek_user_level == 'admin') {
			//jika form disubmit
			if ($this->input->post('ubah')) {
				$this->form_validation->set_rules('tahun', 'Tahun', 'required|min_length[2]|max_length[11]|numeric');
				$this->form_validation->set_rules('nominal', 'Nominal', 'required|min_length[2]|max_length[11]|numeric');

				if ($this->form_validation->run() == TRUE) {
					//masukkan data POST ke dalam variabel $array
					$array = array(
						'tahun' => $this->input->post('tahun'),
						'nominal' => $this->input->post('nominal'),
					);
					//panggil method insert pada Model model_dataspp
					$this->model_dataspp->update($array, array('id_spp' => $this->input->post('idspp')));
					//kembali ke daftar tabel
					$url = base_url() . 'dataspp/';
					redirect($url);
				} else {
					$datakosong = "";
					$data['satu'] = array(
						'id_spp' => $this->input->post('idspp'),
						'tahun' => $this->input->post('tahun'),
						'nominal' => $this->input->post('nominal'),
					);
					$this->load->view('spp/datasppformedit', $data);
				}
			} else {
				//id diambil dari URL SEGMENT 3
				$data['satu'] = $this->model_dataspp->getwhere(array('id_spp' => $this->uri->segment(3)))->row_array();
				$this->load->view('spp/datasppformedit', $data);
			}
		} else {
			redirect('notfound');
		}
	}
	public function hapus()
	{
		//Cek User
		$cek_user_level = $this->session->userdata('akses');

		if ($cek_user_level == 'admin') {
			//jika telah diset URI SEGMENT 3 (id spp) maka hapus data sesuai id yang diset
			//dengan memanggil method model model_dataspp
			if ($this->uri->segment(3)) $this->model_dataspp->delete(array('id_spp' => $this->uri->segment(3)));
			//kembali ke daftar tabel
			$url = base_url() . 'dataspp/';
			redirect($url);
		} else {
			redirect('notfound');
		}
	}
}
