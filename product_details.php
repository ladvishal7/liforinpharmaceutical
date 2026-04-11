<?php 
    $active = 'product';
    include('header.php');
    $slug= $_GET['slug'];
    $product = products($slug);  
    $productDetail = mysqli_fetch_assoc($product);
    $parentCategory = getcategory_slug($productDetail['category']);  
    $category = getParentCategoryBySlug($parentCategory); 
  ?>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout4 py-0">
      <div class="breadcrumb-area">
        <div class="container">
          <nav>
            <ol class="breadcrumb d-flex justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="index-2">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?php if($category['slag'] == 'domestic_products'){ echo 'domestic-products';}else{ echo 'export-products';} ?>"> <?= $category['name'] ?> </a>
              </li>
              <li class="breadcrumb-item">
                <a href="product-listing?slug=<?= $parentCategory ?>"><?= ucwords($parentCategory) ?></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page"><?= $productDetail['heading'] ?></li>
            </ol>
          </nav>
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop single
    =========================== -->
    <section class="shop pb-40 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- /.alert-panel-->
            <div class="row product-item-single">
              <div class="col-sm-6">
                <div class="product-img">
                  <img src="images/<?= $productDetail['fichimg'] ?>" class="zoomin" alt="<?= $productDetail['heading'] ?>" loading="lazy">
                </div><!-- /.product-img -->
              </div>
              <div class="col-sm-6">
                <h1 class="product-title"><?= $productDetail['heading'] ?></h1>
                <!-- /.product-meta-review -->
                
                <div class="product-desc">
                  <p><?= $productDetail['description'] ?></p>
                </div><!-- /.product-desc -->
               
                <div class="product-meta-details">
                  <ul class="list-unstyled mb-30">
                    <li><span>Company :</span> <span><?= $productDetail['location'] ?></span></li>
                    <li><span>Component :</span> <span><?= $productDetail['client_name'] ?></span></li>
                    <li><span>Unit :</span> <span> <?= ucwords($parentCategory) ?></span></li>
                    <li><span>Packing Type :</span> <span> <?= $productDetail['duration'] ?></span></li>
                    <li><span>Production Capacity :</span>  <span><?= $productDetail['size'] ?></span></li>
                    <li><span>Pack Insert/Leaflet :</span>  <span><?= ($productDetail['leaflet'] == 1)? 'YES' : 'No' ?></span></li>
                  </ul>
                </div><!-- /.product-meta-details -->
                <div class="product-quantity d-flex mb-30">
                  
                  <a class="btn btn-secondary" href="enquiry-now">Enquiry Product</a>
                </div>
                <!-- /.social-icons -->
              </div>
            </div><!-- /.row -->
            <!-- /.product-tabs -->
            
            <!-- /.row -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop single -->

<?php include('footer.php') ?>