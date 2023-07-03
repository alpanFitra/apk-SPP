<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_home extends CI_Model
{
	public function totalsiswa()
	{
		$totsiswa = $this->db->query("SELECT COUNT(*) AS countsiswa FROM siswa");
		return $totsiswa;
	}

	public function totalkelas()
	{
		$totkelas = $this->db->query("SELECT COUNT(*) AS countkelas FROM kelas");
		return $totkelas;
	}

	public function totalpembayaran()
	{
		$totpembayaran = $this->db->query("SELECT COUNT(*) AS countpembayaran FROM pembayaran");
		return $totpembayaran;
	}

	public function statpembayar()
	{
		$sp = $this->db->query("SELECT CONCAT(YEAR(tgl_bayar),'-',MONTH(tgl_bayar)) AS tahun_bulan, COUNT(id_pembayaran) AS jumalah_pembayar
							FROM pembayaran GROUP BY YEAR(tgl_bayar) DESC,MONTH(tgl_bayar) DESC LIMIT 0,5");
		return $sp;
	}
}
