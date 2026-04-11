<?php 
  $active = 'enquiry';
  include('header.php') ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout2 page-title-light pb-30 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/10.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-5">
            <h1 class="pagetitle-heading">Enquiry Now</h1>
            
            
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="breadcrumb-area">
        <div class="container">
          <nav>
            <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
              <li class="breadcrumb-item">
                <a href="index">Home</a>
              </li>
              
              <li class="breadcrumb-item active" aria-current="page">Enquiry Now</li>
            </ol>
          </nav>
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
    </section><!-- /.page-title -->

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-2">
            &nbsp;<!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="contact-panel">
              <form class="contact-panel-form" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel-title">Enquiry Us</h4>
                    <p class="contact-panel-desc mb-30">Please feel welcome to contact our friendly reception staff
                      with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="service">Select Services</label>
                      <select id="service" class="form-control">
                        <option value="1">Genetic Tests</option>
                        <option value="2">Genetic Tests</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="location">Location</label>
                      <select id="location" class="form-control">
                        <option value="1">California</option>
                        <option value="2">NYC</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="name">Name (required)</label>
                      <input type="text" class="form-control" placeholder="Name" id="name" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="Email" id="email">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <label for="phone">Phone (required)</label>
                      <input type="text" class="form-control" placeholder="Phone" id="phone">
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <label for="date">Date (required)</label>
                      <input type="date" class="form-control" id="date" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <label for="time">Time (required)</label>
                      <input type="time" class="form-control" id="time" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-12">
                    <div class="form-group mb-20">
                      <label class="mb-20">Special Hours and Access</label>
                      <div class="d-flex flex-wrap checkbox-controls">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck6">
                          <label class="custom-control-label" for="customCheck6"> Open before 8:00 am</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck7">
                          <label class="custom-control-label" for="customCheck7">Wheelchair Accessible</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck8">
                          <label class="custom-control-label" for="customCheck8">Open Saturdays</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck9">
                          <label class="custom-control-label" for="customCheck9"> Serving Customers with Autism</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck10">
                          <label class="custom-control-label" for="customCheck10">24 Hour Holter Monitoring</label>
                        </div>
                      </div>
                    </div>
                    <div class="alert alert-primary">
                      You can choose to walk-in, book an appointment, or check-in online. Please note while walk-ins are
                      welcome, we recommend booking an appointment to help minimize your wait time.
                    </div>
                    <div class="border-top mb-50 mt-50"></div>
                    <p class="mb-30">Kindly provide your personal informations below:</p>
                    <div class="form-group">
                      <label for="address">Street Address</label>
                      <input type="text" class="form-control" placeholder="Tanta, Saed Street" id="address">
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" placeholder="Tanta" id="city">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="zip">Zip</label>
                      <input type="text" class="form-control" placeholder="2468" id="zip">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <label for="details">Additional Details</label>
                      <textarea class="form-control" placeholder="Details" id="details" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block btn-xhight">
                      <span>Submit</span> <i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-2">
            &nbsp;<!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
<?php include('Footer.php') ?>