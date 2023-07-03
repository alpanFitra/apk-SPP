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
    <title>SpeApp - Histori Pembayaran</title>

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
		<?php
	if ($satu['nisn'] == ''){
?>
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">404 <small>Page Not Found</small></h1>
				</div>
			</div>
			<div class="alert alert-warning" role="alert">
				<strong>Warning!</strong><br>
				The page you requested was not found.<br>
			</div>
<?php
	}
	else{
?>
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
									<input type='hidden' name='idnisn' value='<?php echo $satu['nisn']; ?>'>
									<div class="row">
										<div class="form-group col-lg-6">
											<label>NISN / NIS</label>
											<input class="form-control" name="nisn" type="text" value="<?php echo $satu['nisn']; ?> / <?php echo $satu['nis']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6"></div>
									</div>
									<div class="row">
										<div class="form-group col-lg-6">
											<label>Nama</label>
											<input class="form-control" name="nisn" type="text" value="<?php echo $satu['nama']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6"></div>
									</div>
									<div class="row">
										<div class="form-group col-lg-6">
											<label>Kelas / Kompetensi Keahlian</label>
											<input class="form-control" name="nisn" type="text" value="<?php echo $satu['nama_kelas']; ?> / <?php echo $satu['kompetensi_keahlian']; ?>" disabled>
										</div>
										<div class="form-group col-lg-6"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- /.container-fluid -->
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
				<!-- End of Main Content -->
				<?php
	}
?>
				</div>

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
