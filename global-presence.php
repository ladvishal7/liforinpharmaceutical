<?php 
  $active = 'global';
  include('header.php') ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading">Global Presence</h1>
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
                <li class="breadcrumb-item">
                  <a href="index">Home</a>
                </li>                
                <li class="breadcrumb-item active" aria-current="page">Global Presence</li>
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
        Services Layout 2
    =========================== -->
    <section class="services-layout2 services-carousel pb-70">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading text-center mb-50">
              <h3 class="heading-subtitle color-primary">Explore!!</h3>
              <h3 class="heading-title">OUR MARKETS</h3>
            </div><!-- /.heading-layout2 -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <?php $ser = services(1); echo $ser['news_description']; ?> 
              <!-- service item #4 -->
              <!-- /.service-item -->
              <!-- service item #5 -->
              <!-- /.service-item -->
              <!-- service item #6 -->
              <!-- /.service-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ========================
     Banner Layout 1
    =========================== -->
    <section class="banner-layout1 bg-overlay bg-overlay-secondary-gradient bg-parallax pt-130 pb-0">
      <div class="bg-img"><img src="assets_front/images/backgrounds/1.jpg" alt="backgrounds"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6">
            <div class="heading-layout2 heading-light mb-60">
              <h3 class="heading-subtitle color-primary">Liforin Pharmaceutical</h3>
              <h3 class="heading-title">Global Presence</h3>
            </div><!-- /.heading-layout2 -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
             <?php $ser = services(2); echo $ser['news_description']; ?>   
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="secondary-content">
        <div class="counters counters-light">
          <div class="container">
            <div class="row">
              <?php $ser = services(3); echo $ser['news_description']; ?>  
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.Counters -->
      </div><!-- /.secondary-content -->
    </section><!-- /.Banner Layout 1 -->

    

    <!-- ======================
       clients
    ========================= -->
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

<?php include('footer.php') ?>