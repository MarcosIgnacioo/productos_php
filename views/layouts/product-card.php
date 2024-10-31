<div class="col-sm-6 col-xl-4">
  <div class="card product-card">
    <div class="card-img-top">
      <a href="<?= BASE_PATH . 'products/' . $product->slug ?>">
        <img src=<?= $product->cover ?> style="max-height: 150px;" alt="not image found" class="img-prod img-fluid" />
      </a>
      <div class="card-body position-absolute end-0 top-0">
        <div class="form-check prod-likes">
          <input type="checkbox" class="form-check-input" />
          <i data-feather="heart" class="prod-likes-icon"></i>
        </div>
      </div>
    </div>
    <div class="card-body">
      <a href="<?= BASE_PATH . 'products/' . $product->slug ?>">
        <p class="prod-content mb-0 text-muted"><?= $product->name ?></p>
      </a>
      <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
        <h4 class="mb-0 text-truncate"><b>$<?= $product->presentations[0]->price[0]->amount ?></b></h4>
        <div class="d-inline-flex align-items-center">
          <i class="ph-duotone ph-star text-warning me-1"></i>
          4.5 <small class="text-muted">/ 5</small>
        </div>
      </div>
      <div class="d-flex">
        <div class="flex-shrink-0">
          <a
            href="<?= BASE_PATH . 'products/' . $product->slug ?>"
            class="avtar avtar-s btn-link-secondary btn-prod-card"
            data-bs-toggle="offcanvas"
            data-bs-target="#productOffcanvas">
            <i class="ph-duotone ph-eye f-18"></i>
          </a>
        </div>
        <div class="flex-grow-1 ms-3">
          <div class="d-grid">
            <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
          </div>
          <div class="d-grid">
            <button class="btn btn-danger" onclick="deleteProduct(this)" data-id=<?= $product->id ?> data-product=<?= json_encode($product) ?>>Delete</button>
            <a class="btn btn-warning" href="<?=BASE_PATH?>products/edit/<?=$product->slug?>">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
