<?php 
    $active = 'product';
    include('header.php');
    $slug= $_GET['slug'];
    $parentCategory = getParentCategoryBySlug($slug);  
    $category = getCategoryBySlug($slug); 
    $products = products_category($category['id']); 
  ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout2 page-title-light pb-30 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets_front/images/page-titles/10.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-5">
            <h1 class="pagetitle-heading"><?= $category['name'] ?></h1>
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
              <li class="breadcrumb-item active" aria-current="page"><a href="<?php if($category['slag'] == 'domestic_products'){ echo 'domestic-products';}else{ echo 'export-products';} ?>"><?= $parentCategory['name'] ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $category['name'] ?></li>
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
            <div class="row">
            <h4 class="text-block-title"><?= $category['name'] ?></h4>
             <div class="col-12">

                <?php 
                $i = 0;

                while($product = mysqli_fetch_assoc($products)){

                    // open new block after every 7 items
                    if($i % 7 == 0){
                        echo '
                        <div class="pricing-widget-layout1 mb-70">
                            <h5 class="pricing-title">
                                Generic Name
                                <span style="float:right">Packing Type</span>
                            </h5>
                            <ul class="pricing-list list-unstyled mb-0">
                        ';
                    }
                ?>
                    <li>
                        <span>
                            <a href="product_details?slug=<?= $product['name'] ?>"><?= $product['heading'] ?></a>
                        </span>
                        <span class="price">10x10 Tab. Alu-Alu</span>
                    </li>

                <?php
                    $i++;

                    // close block after 7 items
                    if($i % 7 == 0){
                        echo '</ul></div>';
                    }
                }

                // close last block if not closed
                if($i % 7 != 0){
                    echo '</ul></div>';
                }
                ?>

                </div>
            </div><!-- /.row -->
            <!-- /.text-block -->
            <!-- /.accordion -->

            <!-- /.widget-plan -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
<?php include('footer.php') ?>