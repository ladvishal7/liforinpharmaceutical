<?php 
  $active = 'home';
  include('header.php');
?>

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1,"autoplay": true, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <?php  foreach(slider() as $slider){ ?>
          <div class="slide-item bg-overlay align-v-h">
            <div class="bg-img"><img src="images/<?= $slider['img'] ?>" alt="<?= $slider['header'] ?>"></div>
            <div class="container">
              <div class="row align-items-center">
                <div class="col-12 col-xl-7">
                  <div class="slide-content">
                    <h2 class="slide-title"><?= $slider['header'] ?></h2>
                    <p class="slide-desc"><?= $slider['caption'] ?></p>                    
                  </div><!-- /.slide-content -->
                </div><!-- /.col-xl-7 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
        <?php } ?>
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ======================
       clients
      ========================= -->
    <section class="clients clients-light has-pattern-bg bg-primary overflow-hidden pt-60 pb-220">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
               <?php foreach(client_logo() as $client){ 
                    if($client['event_description']  == 1){ ?>
                  <div class="client">
                      <img src="images/<?= $client['event_img'] ?>" alt="<?= $client['event_name'] ?>">
                  </div><!-- /.client -->
              <?php } } ?>
              
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="curve-top-shape d-none d-xl-block">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.clients -->

    <!-- ========================
      fancybox-layout5
    =========================== -->
    <section class="fancybox-layout5 pt-0 pb-40 border-bottom">
      <div class="container">
        <div class="row">
          <?php $third = welcome_note(1);
            echo $third['text'];
          ?>
        <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox-layout5 -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pt-100 pb-100">
      <div class="container">
        <div class="row">
          <?php $foure = welcome_note(2);
          ?>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="position-relative">
              <div class="about-img rounded-clippath-filter">
                <?php $img = json_decode($foure['img']);?>
                <img src="images/<?= $img[0] ?>" alt="about" class="octagon-clippath">
              </div>
              <ul class="features-list-layout4 list-unstyled p-0 mb-40">
                <li class="feature-item">
                  <div class="feature-item-inner octagon-clippath">
                    <div class="feature-icon"><i class="icon-flask2"></i></div>
                    <h4 class="feature-title mb-0">Strict Quality Manufacturing</h4>
                  </div>
                </li>
                <li class="feature-item">
                  <div class="feature-item-inner octagon-clippath">
                    <div class="feature-icon"><i class="icon-mortar"></i></div>
                    <h4 class="feature-title mb-0">Highly Advanced Instruments</h4>
                  </div>
                </li>
                <li class="feature-item">
                  <div class="feature-item-inner octagon-clippath">
                    <div class="feature-icon"><i class="icon-gloves"></i></div>
                    <h4 class="feature-title mb-0">Global Reach</h4>
                  </div>
                </li>
              </ul><!-- /.features-list-layout4 -->
            </div>
          </div><!-- /.col-xl-7 -->
          <div class="col-sm-12 col-md-10 col-lg-12 col-xl-5">
            <?=  $foure['text']; ?>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ========================
        Services Layout 3
    =========================== -->
    <section class="services-layout3 services-carousel bg-gray-gradient pt-130 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <div class="heading-layout2 text-center mb-50">
              <h2 class="heading-subtitle color-primary">Find the Right Trusted Patner Your Needs!</h2>
              <h3 class="heading-title">Providing Innovative Quality Services</h3>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <?php $five = welcome_note(3);?>
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <?= $five['text'] ?>
                <div class="service-shape">
                  <span class="hexagon-clippath"></span><span class="hexagon-clippath2"></span>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 3 -->

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