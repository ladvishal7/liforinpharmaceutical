<!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
        
          <div class="row">
            <!-- /.col-lg-3 -->
            
            <div class="col-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget-title">Company Link</h6>
                <nav>
                  <ul class="list-unstyled">
                  <li><a href="index">Home</a></li>
                    <li><a href="company-profile">About Us</a></li>
                    <li><a href="team">Our Team</a></li>
                    <li><a href="careers">Careers with us</a></li>
                    <li><a href="enquiry-now">Enquiry Now</a></li>
                    <li><a href="contact-us">Contact Us</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-lg-3">
              <div class="footer-widget-nav">
                <h6 class="footer-widget-title">Our Products</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Domestic Products</a></li>
                    <li><a href="#"> Export Products</a></li>
                    
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <!-- /.col-lg-2 -->
            <div class="col-6 col-lg-3">
              <div class="footer-widget-contact">
              <img src="assets_front/images/logo/logo-light.png" alt="logo">
                
                <p>If you have any questions or need help, feel free to contact with our team.</p>
                <ul class="contact-list list-unstyled">
                  <li>
                    <p>Send Us Email:</p>
                    <a href="mailto:<?=  $conact['description'] ?>">
                      <i class="contact-icon icon-email"></i><span><?=  $conact['description'] ?></span>
                    </a>
                  </li>
                  <li>
                    <p>Call Us Today:</p>
                    <a href="tel:<?=  $conact['name'] ?>">
                      <i class="contact-icon icon-phone"></i> <span><?=  $conact['name'] ?></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-6 col-lg-4">
              <div class="footer-widget-nav">
                <h6 class="footer-widget-title">Reach Us</h6>
                <iframe src="<?=  $conact['map'] ?>" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- /.footer-widget-content -->
            </div>
            <!-- /.col-lg-3 -->
          </div><!-- /.row -->
          
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
              
              <div class="mt-1">
                <span>&copy; <?= date('Y') ?> Liforin Pharmaceutical, All Rights Reserved. Design by </span>
                <a href="http://www.minfotech.in" target="_blank" title="Branding | Web Designing & Developement | Mobile Apps Services Call Us on 83 206 11 201">Minfotech It Solutions</a>
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-wrap justify-content-between">
              <ul class="social-icons list-unstyled mb-0 mr-50">
                <?php foreach($socials as $social){ ?>
                <li>
                  <a href="<?= $social['link'] ?>" target="_blank"><i class="social-icon <?= $social['icon'] ?>"></i><span class="social-title"><?= $social['name'] ?></span></a>
                </li>
                <?php } ?>
              </ul><!-- /.social-icons -->
              <button id="scrollTopBtn">
                <span class="btn-text">Back To Top </span> <i class="icon-arrow-long"></i>
              </button>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    
  </div><!-- /.wrapper -->

    <script data-cfasync="false" src="assets_front/js/email-decode.min.js"></script>
    <script src="assets_front/js/jquery-3.5.1.min.js"></script>
    <script src="assets_front/js/plugins.js"></script>
    <script src="assets_front/js/main.js"></script>
    <script defer src="assets_front/js/beacon.min.js" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"8e4efc0026d0404083dfbf37b48d3c38","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>

    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>