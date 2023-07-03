<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/online-learning.png" />
    <title>SpeApp - Edit Data kelas</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
				<?php
	if ($satu['id_kelas'] == ''){
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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Siswa <small>edit</small></h1>
					
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Masukkan Data Kelas</h6>
                        </div>
						<div class="card-body">
                        <div class="panel-body">
                            <div class="row">
								<div class="col-lg-12">
								<form role="form" method="post">
								<input type='hidden' name='idkelas' value='<?php echo $satu['id_kelas'];?>'>
										<div class="form-group">
                                            <label>Nama Kelas</label>
											<input class="form-control" name="namakelas" type="text" value="<?php echo $satu['nama_kelas'];?>">
											<?php echo form_error('namakelas','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>Kompetensi Keahlian</label>
											<input class="form-control" name="komli" type="text" value="<?php echo $satu['kompetensi_keahlian'];?>">
											<?php echo form_error('komli','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group input-group">
                                            <button type="submit" name="ubah" class="btn btn-outline btn-success" Value="Ubah">Ubah</button>
											<a href="<?php echo site_url();?>datakelas/" class="btn btn-outline btn-danger">Kembali</a>
                                        </div>
									</form>
								</div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
						</div>
                    </div>
					<?php
	}
?>
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

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
