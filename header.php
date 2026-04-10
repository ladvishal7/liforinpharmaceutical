<?php 
    include_once 'fun.php'; 
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">

	<base href="<?= $base_url ?>/">
	<!-- Page Title -->
    <title>C-Link Technology - CCTV Security Camera</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="<?= $base_url; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="<?= $base_url; ?>/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="<?= $base_url; ?>/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="<?= $base_url; ?>/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="<?= $base_url; ?>/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="<?= $base_url; ?>/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="<?= $base_url; ?>/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="<?= $base_url; ?>/css/custom.css" rel="stylesheet" media="screen">
	<style>
		.main-menu ul li.submenu > a {
			position: relative;
		}
		.main-menu ul li.submenu > a:after {
			position: absolute;
		}
	</style>
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?= $base_url; ?>/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index">
						<img src="<?= $base_url; ?>/images/logo.jpg" alt="C-link technoloyu Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
								
                                <li class="nav-item"><a class="nav-link" href="<?= $base_url; ?>/index">Home</a></li>                            
								
                                <li class="nav-item"><a class="nav-link" href=<?= $base_url; ?>/about>About Us</a>
                                <li class="nav-item"><a class="nav-link" href="<?= $base_url; ?>/services">Services</a></li>
                                
                                <li class="nav-item submenu"><a class="nav-link" href="javascript:void(0)">Our Products</a>
                                    <ul>   
										<?php foreach(menu() as $menu){ ?>                                     
                                        	<li class="nav-item submenu"><a class="nav-link" href="javascript:void(0)"><?= $menu['name'] ?></a>
												<?php 
												$submenus = menu($menu['id']); 
												if ($submenus && $submenus->num_rows > 0) { ?>
													<ul>
														<?php foreach($submenus as $submenu){ ?> 
															<li class="nav-item">
																<a class="nav-link" href="<?= $base_url; ?>/<?= $submenu['slag'] ?>">
																	<?= $submenu['name'] ?>
																</a>
															</li>
														<?php } ?>    
													</ul>
												<?php } ?>	
										</li>
										<?php } ?>    
                                        <!-- <li class="nav-item"><a class="nav-link" href="product-details">Product details</a></li>	 -->
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="<?= $base_url; ?>/inquiry">Inquiry Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= $base_url; ?>/contact">Contact Us</a></li>                         
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="contact" class="btn-default">get a quote</a>
                        </div>
                        <!-- Header Btn End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
