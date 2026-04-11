<?php 
  $active = 'product';
  include('header.php');
  $query=mysqli_query($conn,"select * from menu_master where parent_id = 68 AND is_active = 0  ");
?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout2 page-title-light pb-30 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/10.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-5">
            <h1 class="pagetitle-heading">Export Product</h1>
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
              <li class="breadcrumb-item active" aria-current="page">Export Product</li>
            </ol>
          </nav>
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
    </section><!-- /.page-title -->

    <section class=" pb-80">
      <div class="container">
        <div class="row">
          <!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- /.text-block -->
            <!-- /.carousel -->

            <!-- /.text-block -->
            <!-- /.row -->
            <!-- /.text-block -->
            <!-- /.accordion -->

            <div class="widget-plan mb-60">
              <!-- /.widget-body -->
              <div class="widget-footer d-flex flex-wrap justify-content-between align-items-center">
                
                <?php 
                    $i = 0;

                    while($row = mysqli_fetch_assoc($query)){

                        if($i % 5 == 0){
                            echo '<div class="d-flex align-items-center mb-20">';
                        }
                    ?>

                        <a href="product-listing?slug=<?= $row['slag'] ?>" class="btn btn-secondary mr-40">
                            <span><?= $row['name'] ?></span> 
                            <i class="icon-arrow-right"></i>
                        </a>

                  <?php
                        $i++;
                         if($i % 5 == 0){
                            echo '</div>';
                        }
                    }
                    if($i % 5 != 0){
                        echo '</div>';
                    }
                ?>
              </div><!-- /.widget-footer -->
            </div><!-- /.widget-plan -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

<?php include('footer.php') ?>