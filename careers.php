<?php 
  $active = 'careers';
  include('header.php') ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading">Careers With Us</h1>
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
                <li class="breadcrumb-item">
                  <a href="index">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Careers With Us</li>
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

    <!-- ========================= 
         careers
    ========================= -->
    <section class="careers pb-70">
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <div class="heading text-center mb-50">
              <h2 class="heading-subtitle color-primary">Current Job Offers And Vacancies</h2>
              <h3 class="heading-title px-xl-5">Be Part Of A Growing Pharmaceutical Company</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- job item #1 -->
               <?php foreach(news() as $career){ ?>
                  <div class=" job-item">
                    <div class="job-meta d-flex align-items-center">
                      <span class="job-type"><?= $career['review_sub'] ?></span>
                      <span class="job-location"><?= $career['review_img'] ?></span>
                    </div>
                    <h4 class="job-title"><?= $career['review_name'] ?></h4>
                    <p class="job-desc"><?= $career['review_text'] ?></p>
                    <a href="contact-us" class="btn btn-secondary btn-link">
                      <i class="plus-icon">+</i>
                      <span>Read More</span>
                    </a>
                  </div><!-- /.job-item -->
                <?php } ?>
             
            </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center mt-50">
            <p class="fw-bold px-xl-5 mb-0">Who are interested in our opening should apply or contact our company.
              <a href="contact-us" class="color-primary underlined-text-secondary">Apply Now</a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.careers -->

  <?php include('footer.php') ?>