        <!-- Main Footer Start -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Main Footer Box Start -->
                        <div class="main-footer-box">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="<?= $base_url; ?>/images/footer-logo.png" alt="">
                            </div>
                            <!-- Footer Logo End -->
                            
                            <!-- Footer Contact Details Start -->
                            <div class="footer-contact-details">
                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <img src="<?= $base_url; ?>/images/icon-phone.svg" alt="">
                                    </div>
                                    <div class="footer-contact-item-content">
                                        <p>phone number</p>
                                        <h3><a href="tel:+456789254">+(1) 456 789 254</a></h3>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <img src="<?= $base_url; ?>/images/icon-mail.svg" alt="">
                                    </div>
                                    <div class="footer-contact-item-content">
                                        <p>email address</p>
                                        <h3><a href="mailto:info@domainname.com">info@domain.com</a></h3>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <img src="<?= $base_url; ?>/images/icon-location.svg" alt="">
                                    </div>
                                    <div class="footer-contact-item-content">
                                        <p>location</p>
                                        <h3>123 Lorem Stree</h3>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->
                            </div>
                            <!-- Footer Contact Details End --> 
                        </div>
                        <!-- Main Footer Box End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- About Footer Start -->
                        <div class="about-footer">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h3>About Solutions</h3>
                                <p>We provide advanced Security and CCTV solutions, ensuring 24/7 protection with high-quality systems.</p>
                            </div>
                            <!-- Footer Links End -->

                            <!-- Footer Social Links Start -->
                            <div class="footer-social-links">
                                <ul>
                                    <?php foreach(social() as $social){ ?>
                                        <li><a href="<?= $social['link'] ?>"><i class="<?= $social['icon'] ?>"></i></a></li>
                                    <?php } ?>                      								
                                </ul>
                            </div>
                            <!-- Footer Social Links End -->
                        </div>
                        <!-- About Footer End -->               
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Quick link</h3>
                            <ul>
                                <li><a href="<?= $base_url; ?>/index">home</a></li>
                                <li><a href="<?= $base_url; ?>/about">about us</a></li>
                                <li><a href="<?= $base_url; ?>/services">services</a></li>
                                <li><a href="<?= $base_url; ?>/products">Products</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>services</h3>
                            <ul>
                                <?php foreach(services() as $service){ ?>
                                    <li><a href="<?= $base_url; ?>/services"><?= $service['news_name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- Newsletter Form Start -->
                        <div class="newsletter-form footer-links">
                            <h3>Subscribe</h3>
                            <p>Stay updated with the latest security trends offers by subscribing to our newsletter.</p>
                            <form id="newsletterForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="mail" placeholder="Enter Your Email" required>
                                    <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Newsletter Form End -->
                    </div>
                </div>
            </div>

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Footer Copyright Text Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © 2026 All Rights Reserved.</p>
                            </div>
                            <!-- Footer Copyright Text End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Footer Privacy Policy Start -->
                            <div class="footer-privacy-policy">
                                <ul>
                                    <li><a href="#">help</a></li>
                                    <li><a href="#">privacy policy</a></li>
                                    <li><a href="#">term's & condition</a></li>
                                </ul>
                            </div>
                            <!-- Footer Privacy Policy End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Main Footer End -->

        <!-- Jquery Library File -->
        <script src="<?= $base_url; ?>/js/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap js file -->
        <script src="<?= $base_url; ?>/js/bootstrap.min.js"></script>
        <!-- Validator js file -->
        <script src="<?= $base_url; ?>/js/validator.min.js"></script>
        <!-- SlickNav js file -->
        <script src="<?= $base_url; ?>/js/jquery.slicknav.js"></script>
        <!-- Swiper js file -->
        <script src="<?= $base_url; ?>/js/swiper-bundle.min.js"></script>
        <!-- Counter js file -->
        <script src="<?= $base_url; ?>/js/jquery.waypoints.min.js"></script>
        <script src="<?= $base_url; ?>/js/jquery.counterup.min.js"></script>
        <!-- Isotop js file -->
        <script src="<?= $base_url; ?>/js/isotope.min.js"></script>
        <!-- Magnific js file -->
        <script src="<?= $base_url; ?>/js/jquery.magnific-popup.min.js"></script>
        <!-- SmoothScroll -->
        <script src="<?= $base_url; ?>/js/SmoothScroll.js"></script>
        <!-- Parallax js -->
        <script src="<?= $base_url; ?>/js/parallaxie.js"></script>
        <!-- MagicCursor js file -->
        <script src="<?= $base_url; ?>/js/gsap.min.js"></script>
        <script src="<?= $base_url; ?>/js/magiccursor.js"></script>
        <!-- Text Effect js file -->
        <script src="<?= $base_url; ?>/js/SplitText.js"></script>
        <script src="<?= $base_url; ?>/js/ScrollTrigger.min.js"></script>
        <!-- YTPlayer js File -->
        <script src="<?= $base_url; ?>/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- Wow js file -->
        <script src="<?= $base_url; ?>/js/wow.min.js"></script>
        <!-- Main Custom js file -->
        <script src="<?= $base_url; ?>/js/function.js"></script>
    </body>
</html>