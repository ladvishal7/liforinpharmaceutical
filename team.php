<?php 
  $active = 'about';
  include('header.php') ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading">Our Team</h1>
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
                <li class="breadcrumb-item">
                  <a href="index">Home</a>
                </li>                
                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
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
    
    <?php 
      $staffList = staff(); 
    ?>
    <!-- ========================
    Team layout 1 (First 3)
========================== -->
<section class="team-layout1 pb-30">
  <div class="container">
    <div class="row">

      <?php foreach($staffList as $index => $staff){ ?>
        
        <?php if($index < 3){ ?>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member-img">
                <img src="images/<?= $staff['staff_img']; ?>" alt="<?= $staff['staff_name']; ?>">
              </div>

              <div class="member-info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member-name"><?= $staff['staff_name']; ?></h5>
                  <p class="member-desc"><?= $staff['staff_designation']; ?></p>
                </div>

                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="<?= $staff['facebook']; ?>"><i class="social-icon icon-facebook"></i></a></li>
                  <li><a href="<?= $staff['twitter']; ?>"><i class="social-icon icon-twitter"></i></a></li>
                  <li><a href="<?= $staff['linkedin']; ?>"><i class="social-icon icon-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>

      <?php } ?>

    </div>
  </div>
</section>


<!-- ========================
    Team layout 2 (Rest)
========================== -->
<section class="team-layout2 text-center pt-0 pb-30">
  <div class="container">
    <div class="row">

      <?php foreach($staffList as $index => $staff){ ?>

        <?php if($index >= 3){ ?>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member-img">
                <img src="images/<?= $staff['staff_img']; ?>" alt="<?= $staff['staff_name']; ?>">
              </div>

              <div class="member-info">
                <ul class="social-icons justify-content-center list-unstyled">
                  <li><a href="<?= $staff['facebook']; ?>"><i class="social-icon icon-facebook"></i></a></li>
                  <li><a href="<?= $staff['twitter']; ?>"><i class="social-icon icon-twitter"></i></a></li>
                  <li><a href="<?= $staff['linkedin']; ?>"><i class="social-icon icon-linkedin"></i></a></li>
                </ul>

                <h5 class="member-name"><?= $staff['staff_name']; ?></h5>
                <p class="member-desc"><?= $staff['staff_designation']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

      <?php } ?>

    </div>
  </div>
</section>

<?php include('footer.php') ?>