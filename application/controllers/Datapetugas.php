<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapetugas extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url().'login/';
				redirect($url);
		}
		$this->load->model('model_datapetugas');
	}
	
	public function index(){
		$cek_user_level = $this->session->userdata('akses');
		
		if($cek_user_level == 'admin'){
			$data['semua'] = $this->model_datapetugas->all();
			$this->load->view('petugas/datapetugas',$data);
		}
		else{
			redirect('notfound');
		}
	}
	
	public function form(){
		$cek_user_level = $this->session->userdata('akses');
		
		if($cek_user_level == 'admin'){
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[25]|alpha|is_unique[petugas.username]', ['required' => 'Username Wajib diisi!','min_length' => 'Username minimal 2 huruf','max_length' => 'Username Maksimal 25 huruf','numeric' => 'Harus Berupa Angka', 'is_unique' => 'Username Telah Terdaftar']);
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[2]|max_length[12]|alpha_numeric', ['required' => 'Password Wajib diisi!','min_length' => 'Password minimal 2 huruf','max_length' => 'Password Maksimal 12 huruf']);
			$this->form_validation->set_rules('namapetugas', 'Nama Petugas', 'required|min_length[2]|max_length[32]', ['required' => 'Nama Petugas Wajib diisi!','min_length' => 'Nama Petugas minimal 2 huruf','max_length' => 'Nama Petugas Maksimal 32 huruf']);

			$this->form_validation->set_rules('pesan');			if ($this->form_validation->run() == TRUE){
				//masukkan data POST ke dalam variabel $array
				$pass=md5($this->input->post('password'));
				$array = array(
							'username'=>$this->input->post('username'),
							'password'=>$pass,
							'nama_petugas'=>$this->input->post('namapetugas'),
							'level'=>$this->input->post('level'),
				);
				//panggil method insert pada Model model_datapetugas
				$this->model_datapetugas->insert($array);
				//kembali ke daftar tabel
				$url=base_url().'datapetugas/';
				redirect($url);
			}
			else{
				$data['satu'] = array(
							'username'=>$this->input->post('username'),
							'password'=>$this->input->post('password'),
							'nama_petugas'=>$this->input->post('namapetugas'),
							'level'=>$this->input->post('level'),
				);
				$this->load->view('petugas/datapetugasform',$data);
			}
		}
		else{			
			redirect('notfound');
		}
	}
	
	public function formedit(){
		$cek_user_level = $this->session->userdata('akses');
		
		//Jika admin
		if($cek_user_level == 'admin'){
			//jika form disubmit
			if($this->input->post('ubah')){
				//jika password dikosongkan
				if($this->input->post('passwordedit')==""){
					//proses validasi
					$this->form_validation->set_rules('passwordedit', 'Password', 'min_length[2]|max_length[12]|alpha_numeric');
					$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[25]|alpha');
					$this->form_validation->set_rules('namapetugas', 'Nama Petugas', 'required|min_length[2]|max_length[32]');
					if ($this->form_validation->run() == TRUE){
						$array = array(
								'username'=>$this->input->post('username'),
								'nama_petugas'=>$this->input->post('namapetugas'),
								'level'=>$this->input->post('level'),
						);
						//panggil method insert pada Model model_datapetugas
						$this->model_datapetugas->update($array,array('id_petugas'=>$this->input->post('idpetugas')));
						//kembali ke daftar tabel
						$url=base_url().'datapetugas/';
						redirect($url);
					}
					else{
						$data['dua'] = $this->model_datapetugas->getwhere(array('id_petugas'=>$this->input->post('idpetugas')))->row_array();
						$data['satu'] = array(
							'id_petugas'=>$this->input->post('idpetugas'),
							'username'=>$this->input->post('username'),
							'nama_petugas'=>$this->input->post('namapetugas'),
							'level'=>$this->input->post('level'),
						);
						$this->load->view('petugas/datapetugasformedit',$data);
					}
				}
				//jika password diisi
				else{
					$this->form_validation->set_rules('passwordedit', 'Password', 'min_length[2]|max_length[12]|alpha_numeric');
					$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[25]|alpha');
					$this->form_validation->set_rules('namapetugas', 'Nama Petugas', 'required|min_length[2]|max_length[32]');
					if ($this->form_validation->run() == TRUE){
						$pass=md5($this->input->post('passwordedit'));
						$array = array(
								'id_petugas'=>$this->input->post('idpetugas'),
								'username'=>$this->input->post('username'),
								'password'=>$pass,
								'nama_petugas'=>$this->input->post('namapetugas'),
								'level'=>$this->input->post('level'),
						);
						//panggil method insert pada Model model_datapetugas
						$this->model_datapetugas->update($array,array('id_petugas'=>$this->input->post('idpetugas')));
						//kembali ke daftar tabel
						$url=base_url().'datapetugas/';
						redirect($url);
					}
					else{
						$data['dua'] = $this->model_datapetugas->getwhere(array('id_petugas'=>$this->input->post('idpetugas')))->row_array();
						$data['satu'] = array(
							'id_petugas'=>$this->input->post('idpetugas'),
							'username'=>$this->input->post('username'),
							'password'=>$this->input->post('passwordedit'),
							'nama_petugas'=>$this->input->post('namapetugas'),
							'level'=>$this->input->post('level'),
						);
						$this->load->view('petugas/datapetugasformedit',$data);
					}
				}
			}
			else{
				//id diambil dari URL SEGMENT 3
				$data['satu'] = $this->model_datapetugas->getwhere(array('id_petugas'=>$this->uri->segment(3)))->row_array();
				$data['dua'] = $this->model_datapetugas->getwhere(array('id_petugas'=>$this->uri->segment(3)))->row_array();
				$this->load->view('petugas/datapetugasformedit',$data);
			}
		}
		//jika bukan admin
		else{
			redirect('notfound');
		}
	}
	public function hapus(){
		//Cek User
		$cek_user_level = $this->session->userdata('akses');
		
		if($cek_user_level == 'admin'){
			//jika telah diset URI SEGMENT 3 (id buku) maka hapus data sesuai id yang diset
			//dengan memanggil method model model_datasiswa
			if($this->uri->segment(3)) $this->model_datapetugas->delete(array('id_petugas'=>$this->uri->segment(3)));
			//kembali ke daftar tabelf
			$url=base_url().'datapetugas/';
			redirect($url);
		}
		else{
			redirect('notfound');
		}
	}
}
