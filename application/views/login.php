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
    <title>SpeApp - Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background: linear-gradient(to bottom, #90caf9, #047edf 99%) !important;">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center" style="margin-top: 30px;">

			<div class="col-xl-5 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">

							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="" width="50" style="margin-bottom: 10px;">
										
										<h1 class="h4 text-gray-900 mb-4">Login Aplikasi SPP</h1>
									</div>
									<form id="loginForm" class="" name="login" action="<?php echo base_url('login'); ?>" method="POST">
										<div class="form-group">
											<?php $pesanlogin = $this->session->flashdata('msg');
											if ($pesanlogin == '') {
												echo $pesanlogin;
											} else {
												echo "<div class='alert alert-danger'>$pesanlogin</div>";
											}
											?>
										</div>
										<div class="form-group">
											<?php
											if ($satu['username'] == "") { ?>
												<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
										</div>
										<?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
									<?php
											} else { ?>
										<input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $satu['username']; ?>">
								</div>
								<?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
							<?php
											}
							?>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me"> Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-success btn-block" value="Login" style="border-radius: 50px; background: linear-gradient(to left, #84d9d2, #07cdae) !important;">Login</button>
							</form>
							<hr>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
