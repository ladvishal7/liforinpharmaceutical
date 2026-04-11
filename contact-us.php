<?php 
  $active = 'contact';
include('header.php');
?>

    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="map py-0">
      <iframe src="<?= $conact['map'] ?>" width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="map-container">
        <div class="contact-panel p-0">
          <div class="panel-header">
            <h3 class="panel-title color-white mb-0">Register Offices</h3>
          </div>
          <div class="accordion" id="accordion">
            <div class="accordion-item opened">
              <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#contact-collapse1">
                <a class="accordion-title" href="#">Support Number</a>
              </div><!-- /.accordion-item-header -->
              <div id="contact-collapse1" class="collapse show" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li>Phone: <?= $conact['name'] ?></li>
                    <li>Phone: +91 84605 80785</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#contact-collapse2">
                <a class="accordion-title" href="#">Email Support</a>
              </div><!-- /.accordion-item-header -->
              <div id="contact-collapse2" class="collapse" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li>Email: <a href="mailto:<?= $conact['description'] ?>"><?= $conact['description'] ?></a></li>
                    <li>Email: <a href="mailto:director@liforinpharmaceutical.com">director@liforinpharmaceutical.com</a></li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#contact-collapse3">
                <a class="accordion-title" href="#">Address and Time</a>
              </div><!-- /.accordion-item-header -->
              <div id="contact-collapse3" class="collapse" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                   
                    <li>Address: <?= $conact['offie_address'] ?></li>
                    <li>Hours: <?= $conact['business_hour'] ?></li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.accordion -->
        </div>
      </div><!-- /.map-container -->
      <div class="curve-top-shape d-none d-xl-block">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="heading-layout2 mb-50">
              <h2 class="heading-subtitle">Contact Us And We Will Respond Within The Next Two Working Days</h2>
              <h3 class="heading-title">Get In Touch with Your <br>
Requirement Fill Below Form</h3>
            </div>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="text-block">
              <p class="text-block-desc">Our customer care staff will distribute your request for consultation to the
                appropriate Laboratory Medicine discipline.</p>
              <p class="text-block-desc">A member of the Medical/Scientific Staff will get back to the requesting
                healthcare medicine provider within one business day.
              </p>
            </div>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="contact-panel-form" method="post" action="email.php" id="contactForm1">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="name"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="email"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="phone"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Additional Details" id="message"
                      name="message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-xhight mt-10">
                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
<?php include('footer.php') ?>