<ul class="navbar-nav sidebar sidebar-dark accordion bg-gradient-info" id="accordionSidebar" style="background: linear-gradient(to top, #90caf9, #047edf 99%) !important;">
		
            <!-- Sidebar - Brand -->
			<?php
			$level = $this->session->userdata('akses');
			if ($level == 'admin') {
			?>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>home/">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi PEMBAYARAN SPP</div>
            </a>
			<?php
			} elseif ($level == 'petugas') {
			?>
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>home/">
				<div class="sidebar-brand-icon rotate-n-15">
				</div>
				<div class="sidebar-brand-text mx-3">Aplikasi PEMBAYARAN SPP</div>
			</a>
			<?php
			} else {
			?>
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>histori/">
				<div class="sidebar-brand-icon rotate-n-15">
				</div>
				<div class="sidebar-brand-text mx-3">Aplikasi PEMBAYARAN SPP</div>
			</a>
			<?php
			} 
			?>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

			<?php
			$level = $this->session->userdata('akses');
			if ($level == 'admin') {
			?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url(); ?>home/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>datasiswa/">
                    <i class="fas fa-fw fa-child"></i>
                    Data Siswa</a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>datapetugas/">
                    <i class="fas fa-fw fa-users"></i>
                    Data Petugas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>datakelas/">
                    <i class="fas fa-fw fa-building"></i>
                    Data Kelas</a>
            </li>     
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>dataspp/">
                    <i class="fas fa-fw fa-credit-card"></i>
                    Data SPP</a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>pembayaran/">
                    <i class="fas fa-fw fa-edit"></i>
                    Entri Trans. Pembayaran</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>laporan/">
                    <i class="fas fa-fw fa-list-alt"></i>
                    Laporan Pembayaran </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
			<?php
			} elseif ($level == 'petugas') {
			?>
			<li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url(); ?>home/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>

			<!-- Divider -->
            <hr class="sidebar-divider my-0">

			<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>pembayaran/">
                    <i class="fas fa-fw fa-edit"></i>
                    Entri Trans. Pembayaran</a>
            </li>
			<?php
			} else {
			?>
			<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>histori/">
                    <i class="fas fa-fw fa-list-alt"></i>
                    Histori Pembayaran</a>
            </li>
			<?php
			}
			?>
        </ul>
