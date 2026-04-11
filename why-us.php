<?php 
  $active = 'about';
  include('header.php') ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading">Why Us?!</h1>
            <p class="pagetitle-desc">With a belief that knowledge is power, we connect our patients directly with their
              results so they have valuable health information when they need it most, care about our people and are
              committed to excellence in our work.
            </p>
            <div class="d-flex flex-wrap align-items-center justify-content-center">
              <a href="javascript:void(0)" class="btn btn-white mb-10 mx-3">
                <i class="icon-arrow-right"></i>
                <span>Insurance Plans</span>
              </a>
              <a href="javascript:void(0)" class="btn btn-white btn-outlined mb-10 mx-3">
                <span>Book Your Visit</span>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
                <li class="breadcrumb-item">
                  <a href="index">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Why Choose Us</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <a class="home-nav" href="index">
        <i class="icon-home"></i>
      </a>
      <div class="curve-top-shape">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.page-title -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pt-130 pb-130">
      <div class="container">
        <div class="row">
          <?php $whyus = about_us(3); echo $whyus['description']; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ========================
     Banner Layout 1
    =========================== -->
    <section class="banner-layout1 bg-overlay bg-overlay-secondary-gradient bg-parallax pt-130 pb-0">
      <div class="bg-img"><img src="assets_front/images/backgrounds/1.jpg" alt="backgrounds"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6">
            <div class="heading-layout2 heading-light mb-60">
              <h3 class="heading-subtitle color-primary">Providing High Quality Test Services For Your Health!</h3>
              <h3 class="heading-title">Helping To Deliver Answers For Health Questions.</h3>
            </div><!-- /.heading-layout2 -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <?php $whyus = about_us(4); echo $whyus['description']; ?>          
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="secondary-content">
        <div class="counters counters-light">
          <div class="container">
            <div class="row">
               <?php $whyus = about_us(5); echo $whyus['description']; ?>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.Counters -->
      </div><!-- /.secondary-content -->
    </section><!-- /.Banner Layout 1 -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 services-carousel pb-70">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading text-center mb-50">
              <h3 class="heading-subtitle color-primary">Where We Can Provide Help!</h3>
              <h3 class="heading-title">Research & Technology</h3>
            </div><!-- /.heading-layout2 -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <?php $whyus = about_us(6); echo $whyus['description']; ?>
              
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ======================
       clients
    ========================= -->
    <section class="clients pt-50 pb-50 border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-10 offset-xl-1 px-xl-5">
            <div class="row align-items-center">
              <div class="col-md-12 col-lg-12 col-xl-4">
                <p class="fw-bold mb-0">The best possible care and we’re here to help you.
                  <a href="find-lab" class="color-secondary underlined-text-primary">Find Your Nearest Lab</a>
                </p>
              </div><!-- /.col-xl-4 -->
              <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="slick-carousel"
                  data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                   <?php foreach(client_logo() as $client){ 
                    if($client['event_description']  == 0){ ?>
                        <div class="client">
                            <img src="images/<?= $client['event_img'] ?>" alt="<?= $client['event_name'] ?>">
                        </div><!-- /.client -->
                    <?php } } ?>
                  </div><!-- /.client -->
                </div><!-- /.carousel -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

<?php include('footer.php') ?>