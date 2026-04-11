<?php 
  $active = 'about';
  include('header.php') ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front_front/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading">Company Profile</h1>
            
            
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
                <li class="breadcrumb-item">
                  <a href="index">Home</a>
                </li>                
                <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
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
      About Layout 1
    =========================== -->
    <section class="about-layout1 pt-90 pb-130">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <div class="heading-layout2 text-center px-xl-5">
              <h2 class="heading-subtitle color-primary">Providing High Quality Pharmaceutical Manufacturer and Exporter in India</h2>
              <h3 class="heading-title mb-50">Know More About Us</h3>
            </div><!-- /heading -->
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
        <div class="row">
          <?php $about = about_us(1); echo $about['description']; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ========================
     clients
    =========================== -->
    <section class="clients pt-50 pb-50 border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="row align-items-center">
              <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="heading text-center mb-50">
              <h3 class="heading-subtitle color-primary">Quality global outreach</h3>
              <h3 class="heading-title">Our Certification</h3>
            </div>
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
                    
                  
                </div><!-- /.carousel -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- ========================
      About Layout 5
    =========================== -->
    <section class="about-layout5 pt-130">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="text-center px-xl-2">
              <h2 class="heading-subtitle color-primary">Providing High Quality Medicines For Your Health!</h2>
              <h3 class="heading-title mb-50">We Believe in Our Core Values and Innovations</h3>
            </div><!-- /heading -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
           <?php $about = about_us(2); echo $about['description']; ?>
        </div><!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 5 -->


<?php include('footer.php') ?>