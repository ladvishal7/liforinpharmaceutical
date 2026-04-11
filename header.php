<?php 
    include_once 'fun.php'; 
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    $socials = social();
    $conact = conact_us(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="">
  <link href="assets_front/images/favicon/favicon.png" rel="icon">
  <title>Liforin Pharmaceutical - Top Global Exporter Pharmaceutical Company India</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="assets_front/css/all.css">
  <link rel="stylesheet" href="assets_front/css/libraries.css">
  <link rel="stylesheet" href="assets_front/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact-list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <i class="icon-phone"></i><a href="tel:<?=  $conact['name'] ?>">Support : <?=  $conact['name'] ?></a>
                  </li>
                  <li>
                    <i class="icon-email"></i><a href="#">E-mail :  <a href="mailto:<?=  $conact['description'] ?>">  <?=  $conact['description'] ?></a></a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us">Mon to Sat: 9.00am to 5.00pm
Sun: 9.00am to 12.00pm</a>
                  </li>
                </ul><!-- /.contact-list -->
                <div class="d-flex align-items-center">
                  <!-- /.social-icons -->
                  <div class="miniPopup-language-area">
                    <button class="miniPopup-language-trigger" type="button">
                      <span><div id="google_translate_element"></div></span><span class="btn-shape"></span>
                    </button>
                    <!-- /.miniPopup-language -->
                  </div>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index">
            <img src="assets_front/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="mainNavigation">
            <ul class="navbar-nav">
              <li class="nav-item has-dropdown">
                <a href="index"  class=" nav-item-link <?= $active == 'home' ? 'active': '' ?>">Home</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav-item has-dropdown">
                <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle nav-item-link <?= $active == 'about' ? 'active': '' ?>">About Us</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="company-profile" class="nav-item-link ">Company Profile</a>
                  </li><!-- /.nav-item -->
                  <li class="nav-item">
                    <a href="team" class="nav-item-link">Our Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav-item">
                    <a href="why-us" class="nav-item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <!-- /.nav-item -->
                 

                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav-item">
                <a href="global-presence" class="nav-item-link <?= $active == 'global' ? 'active': '' ?>">Global Presence</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav-item has-dropdown">
                <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle nav-item-link <?= $active == 'product' ? 'active': '' ?>">Our Products</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="domestic-products" class="nav-item-link">Domestic Products</a></li>
                    <li class="nav-item"><a href="export-products" class="nav-item-link">Export Products</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav-item">
                    <a href="careers" class="nav-item-link <?= $active == 'carrers' ? 'active': '' ?>">Careers with us</a>
                  </li><!-- /.nav-item -->
              <li class="nav-item">
                <a href="contact-us" class="nav-item-link <?= $active == 'contact' ? 'active': '' ?>">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            
            <a href="enquiry-now" class="btn btn-primary btn-contact">
              Enquiry Now!
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    