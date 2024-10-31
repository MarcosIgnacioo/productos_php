<?php
include_once "../../app/config.php";
include_once("../../app/BrandController.php");
include_once("../../app/CategoryController.php");
include_once("../../app/ProductController.php");
$brandController = new BrandController();
$categoryController = new CategoryController();
$brands = $brandController->get();
$categories = $categoryController->get();
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
                <li class="breadcrumb-item" aria-current="page">Add New Product</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Edit product</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <form method="POST" action="../api-products" enctype="multipart/form-data">
          <!-- [ sample-page ] start -->
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Product description</h5>
              </div>
              <div class="card-body">
                <input type="text" hidden name="action" value="update_product">
                <input type="text" hidden name="id" value=<?= $product->id ?>>
                <input type="text" name="global_token" value=<?= $_SESSION['global_token'] ?> hidden>
                <div class="mb-3">
                  <label class="form-label">Product Name</label>
                  <input type="text" name="name" value="<?= $product->name ?>" class="form-control" placeholder="Enter Product Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Product Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug_input" value="<?= $product->slug ?>" placeholder="Enter Product Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Brand</label>
                  <select class="form-select" name="brand_id" id="brand_selector">
                    <?php if (isset($brands) && sizeof($brands)): ?>
                      <?php foreach ($brands as $brand) : ?>
                        <option value="<?= $brand->id ?>"><?= $brand->name ?></option>
                      <?php endforeach ?>
                  </select>
                <?php endif; ?>
                </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <select class="form-select" name="category_id" id="category_selector">
                    <?php if (isset($categories) && sizeof($categories)): ?>
                      <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category->id ?>"><?= $category->name ?></option>
                      <?php endforeach ?>
                  </select>
                <?php endif; ?>
                </select>
                </div>
                <div class="mb-0">
                  <label class="form-label">Product Description</label>
                  <textarea class="form-control" name="description" placeholder="Enter Product Description">
<?= $product->description ?>
</textarea>
                </div>
                <div class="mb-0">
                  <label class="form-label">Product Features</label>
                  <textarea class="form-control" name="features" placeholder="Enter Product Features">
<?= $product->features ?>
                </textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Product image</h5>
              </div>
              <div class="card-body">
                <div class="mb-0">
                  <p><span class="text-danger">*</span> Recommended resolution is 640*640 with file size</p>
                  <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Click to Upload</label>
                  <input type="file" name="cover" id="flupld" class="d-none" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body text-end btn-page">
                <button type="submit" class="btn btn-primary mb-0">Save product</button>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->

        </form>

      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->

  <?php

  include "../layouts/footer.php";

  ?>
  <?php

  include "../layouts/scripts.php";

  ?>

  <?php

  include "../layouts/modals.php";

  ?>

</body>
<!-- [Body] end -->

</html>
