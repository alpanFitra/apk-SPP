<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/online-learning.png" />
	<title>SpeApp - Pembayaran SPP</title>

	<!-- Custom fonts for this template -->
	<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view('template/sidemenu'); ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Topbar Navbar -->
					<?php $this->load->view('template/topmenu'); ?>
				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Pembayaran SPP</h1>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<form role="form" method="post" enctype="multipart/form-data">
									<input type='hidden' name='idspp' value='<?php echo $satu['id_spp']; ?>'>
									<input type='hidden' name='idnisn' value='<?php echo $satu['nisn']; ?>'>
									<input type='hidden' name='idtahun' value='<?php echo $satu['tahun']; ?>'>
									<input type='hidden' name='idnominal' value='<?php echo $satu['nominal']; ?>'>
									<div class="wraper form-group input-group col-lg-5">
										<input type="text" class="form-control" placeholder="Cari Siswa..." value="<?php echo $satu['nisn']; ?>" disabled>
										<span class="input-group-btn">
											<button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important; color:white;"><i class="fa fa-search"></i> Cari Siswa</button>
										</span>
									</div>
									<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content" style="width: 150%;">
												<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel" >Cari Siswa</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												</div>
												<div class="modal-body">
													<table class="table table-striped table-bordered table-hover" id="dataTables-example">
														<thead>
															<tr>
																<th>NISN</th>
																<th>NIS</th>
																<th>Nama Siswa</th>
																<th>Kelas</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php
															foreach ($siswa->result_array() as $d) {
															?>
																<tr class="odd gradeX">
																	<td><?php echo $d['nisn']; ?></td>
																	<td><?php echo $d['nis']; ?></td>
																	<td><?php echo $d['nama']; ?></td>
																	<td><?php echo $d['nama_kelas']; ?></td>
																	<td class="center tooltip-demo">
																		<a href="<?php echo site_url('pembayaran/form/' . $d['nisn']); ?>">
																			<button type="button" class="btn btn-success btn-xs bg-gradient-success" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important;"> Pilih Siswa</button>
																		</a>
																	</td>
																</tr>
															<?php
															}
															?>
														</tbody>
													</table>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
												</div>
											</div>
											<!-- /.modal-content -->
										</div>
										<!-- /.modal-dialog -->
									</div>
									<!-- /.modal -->
									<!-- / .form untuk transaksi -->
									<div class="row">
										<div class="form-group col-lg-6">
											<label>NIS</label>
											<input class="form-control" name="nis" type="text" value="<?php echo $satu['nis']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6">
											<label>Tahun Dibayar</label>
											<input class="form-control" name="tahun" type="text" value="<?php echo $satu['tahun']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6">
											<label>Nama</label>
											<input class="form-control" name="nama" type="text" value="<?php echo $satu['nama']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6">
											<label>Bulan Dibayar</label>
											<select class="form-control" name="bulan">
												<option value="">- Pilih Bulan -</option>
												<option value="Januari">Januari</option>
												<option value="Februari">Februari</option>
												<option value="Maret">Maret</option>
												<option value="April">April</option>
												<option value="Mei">Mei</option>
												<option value="Juni">Juni</option>
												<option value="Juli">Juli</option>
												<option value="Agustus">Agustus</option>
												<option value="September">September</option>
												<option value="Oktober">Oktober</option>
												<option value="November">November</option>
												<option value="Desember">Desember</option>
											</select>
											<?php echo form_error('bulan', '<p class="text-danger">', '</p>'); ?>
											<div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
										</div>
										<div class="form-group col-lg-6">
											<label>Kelas</label>
											<input class="form-control" name="kelas" type="text" value="<?php echo $satu['nama_kelas']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6">
											<label>Jumlah Bayar (Rp.)</label>
											<input class="form-control" name="nominal" type="text" value="<?php echo number_format($satu['nominal'], 2, ",", "."); ?>" disabled>
										</div>
									</div>
									<div class="form-group input-group">
										<button type="submit" name="proses" class="btn btn-outline btn-success" Value="Proses">Bayar</button>
										<a href="<?php echo site_url(); ?>pembayaran/" class="btn btn-outline btn-danger">Kembali</a>
									</div>
									<!-- /.tutup form untuk transaksi -->
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="table-responsive">
							<div class="panel panel-default">
								<div class="panel-heading">
									Histori Pembayaran
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Tanggal Pembayaran</th>
													<th>Nomor Pembayaran</th>
													<th>Tahun Dibayar</th>
													<th>Bulan Dibayar</th>
													<th>Petugas</th>
													<th>Jumlah Bayar</th>
													<th>Aksi</th>
												</tr>
											</thead>

											<tbody>
												<?php
												foreach ($databayar->result_array() as $d) {
													$tgl = tgl_indo($d['tgl_bayar']);
												?>
													<tr>
														<td><?php echo $tgl; ?></td>
														<td><?php echo $d['id_pembayaran']; ?></td>
														<td><?php echo $d['tahun_dibayar']; ?></td>
														<td><?php echo $d['bulan_dibayar']; ?></td>
														<td><?php echo $d['nama_petugas']; ?></td>
														<td align="right"><?php echo number_format($d['jumlah_bayar'], 2, ",", "."); ?></td>
														<td class="center tooltip-demo">
															<a href="<?php echo site_url('pembayaran/kwitansi/' . $d['id_pembayaran']); ?>" target="_blank">
																<button type="button" class="btn btn-success btn-xs" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important;"><i class="fas fa-print"></i> Cetak Kwitansi</button>
															</a>
														</td>
													</tr>
												<?php
												}
												?>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
								<!-- /.panel-body -->
							</div>

						</div>
					</div>
				</div>
			</div>
						<!-- End of Main Content -->


					</div>
					<!-- End of Content Wrapper -->

				</div>
				<!-- End of Page Wrapper -->

				<!-- Bootstrap core JavaScript-->
				<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

				<!-- Core plugin JavaScript-->
				<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

				<!-- Custom scripts for all pages-->
				<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

				<script>
					$(document).ready(function() {
						$('#dataTables-example').DataTable({
							responsive: true
						});
					});
				</script>
				<!-- Page level plugins -->
				<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

				<!-- Page level custom scripts -->
				<script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>

<?php
function tgl_indo($tgl)
{
	$tanggal = substr($tgl, 8, 2);
	$bulan = getBulan(substr($tgl, 5, 2));
	$tahun = substr($tgl, 0, 4);
	return $tanggal . ' ' . $bulan . ' ' . $tahun;
}

function getBulan($bln)
{
	switch ($bln) {
		case 1:
			return "Januari";
			break;
		case 2:
			return "Februari";
			break;
		case 3:
			return "Maret";
			break;
		case 4:
			return "April";
			break;
		case 5:
			return "Mei";
			break;
		case 6:
			return "Juni";
			break;
		case 7:
			return "Juli";
			break;
		case 8:
			return "Agustus";
			break;
		case 9:
			return "September";
			break;
		case 10:
			return "Oktober";
			break;
		case 11:
			return "November";
			break;
		case 12:
			return "Desember";
			break;
	}
}
?>
