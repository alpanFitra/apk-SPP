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
									<div class="form-group input-group">
										<input type="text" class="form-control" placeholder="Cari Siswa..." disabled>
										<span class="input-group-btn">
											<button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal" style="background: linear-gradient(to left, #84d9d2, #07cdae) !important; color: white;"><i class="fa fa-search"></i> Cari Siswa</button>
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

