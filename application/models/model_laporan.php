<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_laporan extends CI_Model
{
	public function caritahun()
	{
		return $this->db->get('spp');
	}

	public function tampilall($idtahun)
	{
		$this->db->select('pembayaran.tgl_bayar, pembayaran.id_pembayaran, siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->order_by('tgl_bayar', 'ASC');
		return $this->db->get();
	}

	public function sum($idtahun)
	{
		$this->db->select('SUM(jumlah_bayar) as sum');
		$this->db->from('pembayaran');
		$this->db->where('tahun_dibayar', $idtahun);
		return $this->db->get();
	}

	public function tampilpertanggal($idtahun, $idbulan)
	{
		$this->db->select('pembayaran.tgl_bayar, pembayaran.id_pembayaran, siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->where('bulan_dibayar', $idbulan);
		$this->db->order_by('tgl_bayar', 'ASC');
		return $this->db->get();
	}

	public function sumpertanggal($idtahun, $idbulan){
		$this->db->select('SUM(jumlah_bayar) as sum');
		$this->db->from('pembayaran');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->where('bulan_dibayar', $idbulan);
		return $this->db->get();
	}

	public function tampilperbulan($idtahun, $idtanggal)
	{
		$this->db->select('pembayaran.tgl_bayar, pembayaran.id_pembayaran, siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->where('tgl_bayar', $idtanggal);
		$this->db->order_by('tgl_bayar', 'ASC');
		return $this->db->get();
	}

	public function sumperbulan($idtahun, $idtanggal){
		$this->db->select('SUM(jumlah_bayar) as sum');
		$this->db->from('pembayaran');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->where('tgl_bayar', $idtanggal);
		return $this->db->get();
	}
	public function tampilper($idtahun, $idbulan, $idtanggal)
	{
		$this->db->select('pembayaran.tgl_bayar, pembayaran.id_pembayaran, siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->where('bulan_dibayar', $idbulan);
		$this->db->where('tgl_bayar', $idtanggal);
		$this->db->order_by('tgl_bayar', 'ASC');
		return $this->db->get();
	}

	public function sumper($idtahun, $idbulan, $idtanggal){
		$this->db->select('SUM(jumlah_bayar) as sum');
		$this->db->from('pembayaran');
		$this->db->where('tahun_dibayar', $idtahun);
		$this->db->where('bulan_dibayar', $idbulan);
		$this->db->where('tgl_bayar', $idtanggal);
		return $this->db->get();
	}
}
