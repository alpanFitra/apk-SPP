<?php
			$level = $this->session->userdata('akses');
			if ($level == 'admin') {
			?>
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
    <title>SPEAPP</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

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
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

					</div>

					<!-- Content Row -->
					<div class="row">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-12">
							<div class="card shadow h-100 py-2 bg-gradient-primary" style="background: linear-gradient(to left, #90caf9, #047edf 99%) !important;">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-4">
											<div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1">
												Total Siswa</div>
											<div class="h2 mb-0 font-weight-bold text-gray-100"><?php $rtotalsiswa = $totalsiswa->row_array();
																								echo $rtotalsiswa['countsiswa']; ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-child fa-4x text-gray-100"></i>
										</div>
									</div>
									<hr>
									<a href="<?php echo base_url() ?>datasiswa">
										<div class="btn btn-warning bg-gradient-warning" style="border-radius: 50px;">
											<span class="pull-left">Lihat Data</span>
											<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

										</div>
									</a>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-12">
							<div class="card shadow h-100 py-2 bg-gradient-danger" style="background: linear-gradient(to left, #ffbf96, #fe7096) !important;">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-4">
											<div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1">
												Total Kelas</div>
											<div class="h2 mb-0 font-weight-bold text-gray-100"><?php $rtotalkelas = $totalkelas->row_array();
																								echo $rtotalkelas['countkelas']; ?></div>

										</div>
										<div class="col-auto">
											<i class="fas fa-building fa-4x text-gray-100"></i>

										</div>
									</div>
									<hr>
									<a href="<?php echo base_url() ?>datakelas">
										<div class="btn btn-warning bg-gradient-warning" style="border-radius: 50px;">
											<span class="pull-left">Lihat Data</span>
											<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

										</div>
									</a>
								</div>
								
							</div>

						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-12">
							<div class="card shadow h-100 py-2 bg-gradient-success" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important;">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-4">
											<div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1">Total Transaksi
											</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h2 mb-0 mr-3 font-weight-bold text-gray-100"><?php $rtotalpembayaran = $totalpembayaran->row_array();
																												echo $rtotalpembayaran['countpembayaran']; ?></div>
												</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-edit fa-4x text-gray-100"></i>
										</div>
									</div>
									<hr>
									<a href="<?php echo base_url() ?>pembayaran">
										<div class="btn btn-warning bg-gradient-warning" style="border-radius: 50px;">
											<span class="pull-left">Lihat Data</span>
											<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

										</div>
									</a>
								</div>
							</div>
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

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php
			} elseif ($level == 'petugas') {
			?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>APLIKASI PEMBAYARAN SPP</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

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
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

					</div>

					<!-- Content Row -->
					<div class="row">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-12">
							<div class="card shadow h-100 py-2 bg-gradient-primary" style="background: linear-gradient(to left, #90caf9, #047edf 99%) !important;">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-4">
											<div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1">
												Total Siswa</div>
											<div class="h2 mb-0 font-weight-bold text-gray-100"><?php $rtotalsiswa = $totalsiswa->row_array();
																								echo $rtotalsiswa['countsiswa']; ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-child fa-4x text-gray-100"></i>
										</div>
									</div>
									<hr>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-12">
							<div class="card shadow h-100 py-2 bg-gradient-danger" style="background: linear-gradient(to left, #ffbf96, #fe7096) !important;">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-4">
											<div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1">
												Total Kelas</div>
											<div class="h2 mb-0 font-weight-bold text-gray-100"><?php $rtotalkelas = $totalkelas->row_array();
																								echo $rtotalkelas['countkelas']; ?></div>

										</div>
										<div class="col-auto">
											<i class="fas fa-building fa-4x text-gray-100"></i>

										</div>
									</div>
									<hr>
									
								</div>
								
							</div>

						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-12">
							<div class="card shadow h-100 py-2 bg-gradient-success" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important;">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-4">
											<div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1">Total Transaksi
											</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h2 mb-0 mr-3 font-weight-bold text-gray-100"><?php $rtotalpembayaran = $totalpembayaran->row_array();
																												echo $rtotalpembayaran['countpembayaran']; ?></div>
												</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-edit fa-4x text-gray-100"></i>
										</div>
									</div>
									<hr>
									
								</div>
							</div>
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

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php }?>
