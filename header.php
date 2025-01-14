<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>

		<!-- Google tag (gtag.js) -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-MZTZ4DWMD8"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				gtag('config', 'G-0Y34QHFQ8Z');
			</script>
        <!-- Meta Tags -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="کسب استار، تامین‌کننده معتبر مواد اولیه رستوران‌ها و فست فود، از جمله برنج، روغن، ادویه و نوشیدنی. با ما کیفیت را تجربه کنید!">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta property="og:title" content="کسب استار | تامین‌کننده مواد اولیه با کیفیت">
		<meta property="og:description" content="تجربه بهترین مواد اولیه برای رستوران‌ها و کترینگ با کسب استار">
		<meta property="og:image" content="URL_to_image.jpg">
		<meta property="og:url" content="URL_to_page">
		
		<!-- Title -->
		<title>کسب استار | تامین‌کننده مواد اولیه با کیفیت برای رستوران‌ها و فست فود</title>
		
		<!-- Favicon -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    </head>
    <body>
		
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Header Area -->
		<header class="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12 mobileDiv">
								<!-- Start Logo -->
								<div class="logo" style="text-align:left;">
									<a class="d-inline" href="<?php echo esc_url('/') ?>">
										<img class="logoImage" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="#">
									</a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav d-inline" id="mobileNav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-9 col-md-9 col-12 text-end">
								<!-- Main Menu -->
								<div class="main-menu">
									<ul class="nav menu" id="navMenu">
										<?php
											wp_nav_menu(array(
												'theme_location' => 'primary_menu',
												'container' => false,
											));
										?>
									</ul>
								</div>
								<!--/ End Main Menu -->
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
