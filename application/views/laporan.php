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
	<title>SpeApp - Laporan Pembayaran</title>

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
					<h1 class="h3 mb-2 text-gray-800">Laporan SPP</h1>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<form role="form" method="post" enctype="multipart/form-data" target="_blank">
									<div class="form-group">
										<label>Pilih Tahun</label>
										<select class="form-control" name="pilihtahun">
											<?php
											$no = 1;
											foreach ($tahun->result_array() as $d) {
												if ($satu['id_spp'] == $d['id_spp']) {
											?>
													<option value="<?php echo $d['tahun']; ?>" selected><?php echo $d['tahun']; ?></option>
												<?php
												} else {
												?>
													<option value="<?php echo $d['tahun']; ?>"><?php echo $d['tahun']; ?></option>
											<?php
												}
												$no++;
											}
											?>
										</select>
									</div>
									<div class="form-group">
										<label>Pilih Bulan</label>
										<select class="form-control" name="pilihbulan">
											<option value="">- Semua Bulan -</option>
											<option value="Januari">Januari</option>
											<option value="Februari">Februari</option>
											<option value="Maret">Maret</option>
											<option value="April">April</option>
											<option value="Mei">Mei</option>
											<option value="Juni">Juni</option>
											<option value="Juli">Juli</option>
											<option value="Agustus">Agustus</option>
											<option value="September">September</option>
											<option value="Kktober">Oktober</option>
											<option value="November">November</option>
											<option value="Desember">Desember</option>
										</select>
									</div>
									<div class="form-group">
										<label>Pilih Bulan</label>
										<input type="date" name="pilihtanggal" class="form-control">
									</div>
									<div class="form-group input-group">
										<button type="submit" name="tampilkan" class="btn btn-outline btn-success" Value="Tampilkan" target="_blank" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important;"><i class="fas fa-id-card"></i> Tampilkan</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

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
