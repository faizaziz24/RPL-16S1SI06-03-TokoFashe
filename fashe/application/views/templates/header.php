<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">

			<div class="topbar">
				<div class="topbar-social">
					<a href="<?php echo base_url(); ?>" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					Free shipping
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>
				</div>
			</div>
			<div class="wrap_header">
				<!-- Logo -->
				<a href="#" class="logo">
					<img src="<?php echo base_url(); ?>assets/images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li><a href="<?php echo base_url(); ?>products">Product</a></li>
							<li><a href="<?php echo base_url(); ?>custom">Custom</a></li>
							<li><a href="<?php echo base_url(); ?>about">About</a></li>
							<li><a href="<?php echo base_url(); ?>contact">Contact</a></li>

							<?php if(!$this->session->userdata('customer_logged_in')) : ?>

							<li><a href="<?php echo base_url(); ?>customers/register">Register</a></li>
							<li><a href="<?php echo base_url(); ?>customers/login">Login</a></li>

							<?php endif; ?>

							<?php if($this->session->userdata('customer_logged_in')) : ?>
							<li><a href="#">Transaction</a>
								<ul class="sub_menu">
									<li><a href="<?php echo base_url(); ?>customers/buying">Buying Transaction</a></li>
									<li><a href="<?php echo base_url(); ?>customers/customing">Customing Transaction</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url(); ?>customers/logout">Logout</a></li>
							<?php endif; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="#" class="logo-mobile">
				<img src="<?php echo base_url(); ?>assets/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url(); ?>assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="item-menu-mobile"><a href="<?php echo base_url(); ?>products">Product</a></li>
					<li class="item-menu-mobile"><a href="<?php echo base_url(); ?>custom">Custom</a></li>
					<li class="item-menu-mobile"><a href="<?php echo base_url(); ?>about">About</a></li>
					<li class="item-menu-mobile"><a href="<?php echo base_url(); ?>contact">Contact</a></li>

					<?php if(!$this->session->userdata('customer_logged_in')) : ?>
						
					<?php endif; ?>

					<?php if($this->session->userdata('customer_logged_in')) : ?>
					<li class="item-menu-mobile">
					<a href="#">Transaction</a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url(); ?>customers/buying">Buying Transaction</a></li>
							<li><a href="<?php echo base_url(); ?>customers/ordering">Customing Transaction</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile"><a href="<?php echo base_url(); ?>customers/logout">Logout</a></li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
	</header>