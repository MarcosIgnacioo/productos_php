<?php
include_once "../../app/config.php";
include_once("../../app/ProductController.php");
$productController = new ProductController();
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $link);
$slug = end($link_array);
$product = $productController->getProductBySlug($slug);
?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
  <?php

  include "../layouts/head.php";
  ?>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">


  <?php

  include "../layouts/sidebar.php";

  ?>

  <?php

  include "../layouts/nav.php";

  ?>



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                <li class="breadcrumb-item" aria-current="page">Products</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
              <h2 class="mb-0"><?=$product->name?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->


      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="sticky-md-top product-sticky">
                    <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                      <div class="carousel-inner bg-light rounded position-relative">
                        <div class="carousel-item active">
                        <img src=<?=$product->cover?> class="d-block w-100" alt="Product images" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <span class="badge bg-success f-14">In stock</span>
                  <h5 class="my-3"><?=$product->name?></h5>
                  <div class="star f-18 mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <i class="far fa-star text-muted"></i>
                    <span class="text-sm text-muted">(4.0)</span>
                  </div>
                  <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">About this item</h5>
                  <ul>
                  <li class="mb-2">
<?= $product->features ?>
</li>
                          
                  </ul>

                  <h3 class="mb-4">$<?= $product->presentations[0]->price[0]->amount ?></h3>
                  <div class="row">
                    <div class="col-6">
                      <div class="d-grid">
                        <button type="button" class="btn btn-primary">Buy Now</button>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="d-grid">
                        <button type="button" class="btn btn-outline-secondary">Add to cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header pb-0">
              <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="ecomtab-tab-1"
                    data-bs-toggle="tab"
                    href="#ecomtab-1"
                    role="tab"
                    aria-controls="ecomtab-1"
                    aria-selected="true">Features
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="ecomtab-tab-2"
                    data-bs-toggle="tab"
                    href="#ecomtab-2"
                    role="tab"
                    aria-controls="ecomtab-2"
                    aria-selected="true">Specifications
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                  <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                      <tbody>
                        <tr>
<?=$product->description?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
                  <div class="row gy-3">
                    <div class="col-md-6">
                      <h5>Product Category</h5>
                      <hr class="mb-3 mt-1" />
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <tbody>
                            <?php foreach ($product->categories as $category) : ?>
                              <td class="py-1"><?= $category->name ?></td>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <h5>Product Tags</h5>
                      <hr class="mb-3 mt-1" />
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <tbody>
                            <?php foreach ($product->tags as $tag) : ?>
                              <td class="py-1"><?= $tag->name ?></td>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <?php

  include "../layouts/footer.php";

  ?>

  <?php

  include "../layouts/scripts.php";

  ?>


  <!-- [Page Specific JS] start -->
  <script>
    // scroll-block
    var tc = document.querySelectorAll('.scroll-block');
    for (var t = 0; t < tc.length; t++) {
      new SimpleBar(tc[t]);
    }
    // quantity start
    function increaseValue(temp) {
      var value = parseInt(document.getElementById(temp).value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById(temp).value = value;
    }

    function decreaseValue(temp) {
      var value = parseInt(document.getElementById(temp).value, 10);
      value = isNaN(value) ? 0 : value;
      value < 1 ? (value = 1) : '';
      value--;
      document.getElementById(temp).value = value;
    }
    // quantity end
  </script>

  <?php

  include "../layouts/modals.php";

  ?>

</body>
<!-- [Body] end -->

</html>
