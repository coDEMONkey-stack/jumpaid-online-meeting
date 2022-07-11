<!DOCTYPE html>
<html lang="en">
<!-- BACKEND JUMPA.ID -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('assets/') ?>images/favicon.ico">

	<title><?= $title ?></title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- daterange picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap-daterangepicker/daterangepicker.css">

	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_plugins/iCheck/all.css">

	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_plugins/timepicker/bootstrap-timepicker.min.css">

	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap-select/dist/css/bootstrap-select.css">

	<!-- Bootstrap tagsinput -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

	<!-- Bootstrap touchspin -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_components/select2/dist/css/select2.min.css">

	<!-- theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

	<!-- Admin skins -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/skin_color.css">

	<!-- toast CSS -->
	<link href="<?= base_url('assets/') ?>vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendor_components/datatable/datatables.min.css" />

	<!-- sweetalert -->
	<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

	<!-- fancybox -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


	<link rel="stylesheet" href="<?= base_url('assets/') ?>vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-deepocean">

	<div class="wrapper">

		<div class="art-bg">
			<img src="<?= base_url('assets/') ?>images/art1.svg" alt="" class="art-img light-img">
			<img src="<?= base_url('assets/') ?>images/art2.svg" alt="" class="art-img dark-img">
			<img src="<?= base_url('assets/') ?>images/art-bg.svg" alt="" class="wave-img light-img">
			<img src="<?= base_url('assets/') ?>images/art-bg2.svg" alt="" class="wave-img dark-img">
		</div>

		<header class="main-header">
			<!-- Logo -->
			<a href="<?= base_url('dashboard') ?>" class="logo">
				<!-- mini logo -->
				<div class="logo-mini">
					<span class="light-logo text-white"><img src="<?= base_url('assets/') ?>images/logo/<?= $global['logo'] ?>" style="max-width:30px" alt="logo"><?= $global['nama_perusahaan'] ?></span>
					<span class="dark-logo"><img src="<?= base_url('assets/') ?>images/logo/<?= $global['logo'] ?>" alt="logo"><?= $global['nama_perusahaan'] ?></span>
				</div>
			</a>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">

				<div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item">
							<a href="#" class="nav-link rounded" data-toggle="push-menu" role="button">
								<i class="nav-link-icon mdi mdi-menu text-white"></i>
							</a>
						</li>
						<li class="btn-group nav-item">
							<a href="#" data-provide="fullscreen" class="nav-link rounded" title="Full Screen">
								<i class="nav-link-icon mdi mdi-crop-free text-white"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav">
						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
								<img src="<?= base_url('assets/') ?>images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
							</a>
							<ul class="dropdown-menu animated flipInX">
								<!-- User image -->
								<li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
									<div class="flexbox align-self-center">
										<img src="<?= base_url('assets/') ?>images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
										<h4 class="user-name align-self-center">
											<span><?= $_SESSION['username'] ?></span><br>
											<small><?= $_SESSION['role'] ?></small>
										</h4>
									</div>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<a class="dropdown-item" href="<?= base_url('account') ?>"><i class="ion ion-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?= base_url('login/logout') ?>"><i class="ion-log-out"></i> Logout</a>
									<div class="dropdown-divider"></div>
								</li>
							</ul>
						</li>


						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar" title="Setting"><i class="fa fa-cog fa-spin"></i></a>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full clearfix position-relative">

				<!-- Left side column. contains the logo and sidebar -->
				<aside class="main-sidebar">
					<!-- sidebar-->
					<section class="sidebar">
						<!-- sidebar menu-->
						<ul class="sidebar-menu" data-widget="tree">

							<li class="header nav-small-cap">Dashboard</li>


							<li>
								<a href="<?= base_url('dashboard') ?>">
									<i class="ti-dashboard"></i> <span>Dashboard</span>
								</a>
							</li>
							
						    <li class="header nav-small-cap">Data EVENT</li>
						    <li>
								<a href="<?= base_url('banner') ?>">
									<i class="ti-list"></i> <span>Event Terkini</span>
								</a>
							</li>


							<li class="header nav-small-cap">Data</li>
							<li>
								<a href="<?= base_url('validasi') ?>">
									<i class="ti-list"></i> <span>Validasi</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('fitur') ?>">
									<i class="ti-list"></i> <span>Fitur</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('keunggulan') ?>">
									<i class="fa fa-list-alt"></i>
									<span>Keunggulan</span>
								</a>
							</li>

							<li>
								<a href="<?= base_url('message') ?>">
									<i class="fa fa-tag"></i>
									<span>Pesanan Customer</span>
								</a>
							</li>

							<li>
								<a href="<?= base_url('kontak') ?>">
									<i class="fa fa-envelope"></i>
									<span>Kontak</span>
								</a>
							</li>
							<li class="header nav-small-cap">Setting</li>

							<li>
								<a href="<?= base_url('backup_database') ?>">
									<i class="fa fa-download"></i>
									<span>Backup Database</span>
								</a>
							</li>

							<li>
								<a href="<?= base_url('global_setting') ?>">
									<i class="fa fa-gear"></i>
									<span>Global Setting</span>
								</a>
							</li>


						</ul>
					</section>
				</aside>