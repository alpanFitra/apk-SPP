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
    <title>SpeApp - Edit Data Siswa</title>

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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Siswa <small>edit</small></h1>
					
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Masukkan Data Siswa</h6>
                        </div>
						<div class="card-body">
                        <div class="panel-body">
                            <div class="row">
								<div class="col-lg-12">
								<form role="form" method="post">
										<input type='hidden' name='idnisn' value='<?php echo $satu['nisn'];?>'>
										<div class="form-group">
                                            <label>NISN</label>
											<input class="form-control" name="nisn" type="text" value="<?php echo $satu['nisn'];?>" disabled>
											<?php echo form_error('nisn','<p class="text-danger">','</p>'); ?>
                                        </div><div class="form-group">
                                            <label>NIS</label>
											<input class="form-control" name="nis" type="text" value="<?php echo $satu['nis'];?>">
											<?php echo form_error('nis','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>Nama</label>
											<input class="form-control" name="nama" type="text" value="<?php echo $satu['nama'];?>">
											<?php echo form_error('nama','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
											<?php
											  $no=1;
											  foreach($kelas->result_array() as $d){
												  if ($satu['id_kelas']==$d['id_kelas']){
											?>
													<option value="<?php echo $d['id_kelas'];?>" selected><?php echo $d['nama_kelas'];?></option>
											<?php
												  }
												  else{
											?>
													<option value="<?php echo $d['id_kelas'];?>"><?php echo $d['nama_kelas'];?></option>
											<?php	  
												  }
											  $no++;
											  }
											?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
											<input class="form-control" name="alamat" type="text" value="<?php echo $satu['alamat'];?>">
											<?php echo form_error('alamat','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>No Telp</label>
											<input class="form-control" name="notelp" type="text" value="<?php echo $satu['no_telp'];?>">
											<?php echo form_error('notelp','<p class="text-danger">','</p>'); ?>
                                        </div>
										<div class="form-group">
                                            <label>SPP</label>
                                            <select class="form-control" name="spp">
											<?php
											  $no=1;
											  foreach($spp->result_array() as $d){
												  if ($satu['id_spp']==$d['id_spp']){
											?>
													<option value="<?php echo $d['id_spp'];?>" selected><?php echo $d['tahun'];?></option>
											<?php
												  }
												  else{
											?>
													<option value="<?php echo $d['id_spp'];?>"><?php echo $d['tahun'];?></option>
											<?php	  
												  }
											  $no++;
											  }
											?>
                                            </select>
                                        </div>
										<div class="form-group input-group">
                                            <button type="submit" name="ubah" class="btn btn-outline btn-success" Value="Ubah">Ubah</button>
											<a href="<?php echo site_url();?>datasiswa/" class="btn btn-outline btn-danger">Kembali</a>
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
