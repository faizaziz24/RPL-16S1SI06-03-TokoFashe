<?php
session_start();

include "library/config.php";
include "library/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fashe | Leather Shoes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="asset/images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="asset/fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="asset/fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="asset/vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
</head>
<body class="animsition">
	<!-- Header -->
	<header class="header1 fixed-header">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<span class="topbar-child1">
					Solution for Making Shoes Sustainable
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe.@gmail.com
					</span>
				</div>
			</div>
			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php?pages=home" class="logo">
					<img src="asset/images/icons/logo.png" alt="IMG-LOGO">
				</a>
				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li><a href="index.php?pages=home">Home</a></li>
							<li><a href="index.php?pages=shop">Shop</a></li>
							<li><a href="index.php?pages=custom">Custom</a></li>
							<li><a href="index.php?pages=about">About</a></li>
							<li><a href="index.php?pages=contact">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- Header Icon -->
				<div class="header-icons">
					<?php include"login.php";  ?>
				</div>
			</div>
		</div>
		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="asset/images/icons/logo.png" alt="IMG-LOGO">
			</a>
			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<?php include"login.php";  ?>

					<span class="linedivide2"></span>
					<div class="header-wrapicon2">
						<img src="asset/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img"><img src="asset/images/item-cart-01.jpg" alt="IMG"></div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>
										<span class="header-cart-item-info">1 x $19.00</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">Total: $75.00</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">View Cart</a>
								</div>
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Check Out</a>
								</div>
							</div>
						</div>
					</div>
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
					<li class="item-menu-mobile"><a href="index.php?pages=home">Home</a></li>
					<li class="item-menu-mobile"><a href="index.php?pages=shop">Shop</a></li>
					<li class="item-menu-mobile"><a href="index.php?pages=custom">Custom</a></li>
					<li class="item-menu-mobile"><a href="index.php?pages=about">About</a></li>
					<li class="item-menu-mobile"><a href="index.php?pages=contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>