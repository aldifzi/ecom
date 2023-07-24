

<!-- Discount -->
<section class="discount-coupon padding-large">
  <div class="container bg-gray">
    <div class="coupon position-relative">
      <div class="bold-text position-absolute">10% OFF</div>
      <div class="row justify-content-between align-items-center padding-small px-5">
        <div class="col-lg-7 col-md-12 mb-3">
          <div class="coupon-header">
            <h2 class="display-7">10% OFF Discount Coupons</h2>
            <p class="m-0">Subscribe us to get 10% OFF on all the purchases</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="btn-wrap">
            <a href="#" class="btn btn-black btn-medium text-uppercase hvr-sweep-to-right">Email me</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php if ($promo->num_rows() > 0) { ?>
  <?php if ($setting['promo'] == 1) { ?>
    <div class="promo">
      <div class="card-header">
        <p class="lead text-light"><i class="fa fa-fire-alt"></i> Berakhir dalam <span id="countdownPromo"></span></p>
        <a href="<?= base_url(); ?>promo"><button class="float-right">Lihat Semua</button></a>
      </div>
      <div class="bottom">
        <?php foreach ($getPromo->result_array() as $data) : ?>
          <a href="<?= base_url(); ?>p/<?= $data['slug']; ?>">
            <div class="card">
              <img src="<?= base_url(); ?>assets/images/product/<?= $data['img'] ?>" class="card-img-top">
              <div class="card-body">
                <p class="card-text mb-0"><?= $data['title'] ?></p>
                <p class="oldPrice mb-0">Rp <?= str_replace(".", ",", number_format($data['price'])) ?></p>
                <p class="newPrice">Rp <?= str_replace(".", ",", number_format($data['promo_price'])) ?></p>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  <?php } else { ?>
    <br><br>
  <?php } ?>
<?php } else { ?>
  <br><br>
<?php } ?>

<?php if ($best->num_rows() > 0) { ?>
  <div class="product-wrapper best-product">
    <h2 class="title">PRODUK TERLARIS</h2>
    <hr>
    <div class="main-product">
      <?php foreach ($best->result_array() as $p) : ?>
        <div>
          <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
            <div class="card">
              <img src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="card-img-top">
              <div class="card-body">
                <p class="card-text mb-0"><?= $p['title']; ?></p>
                <?php if ($setting['promo'] == 1) { ?>
                  <?php if ($p['promo_price'] == 0) { ?>
                    <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></p>
                  <?php } else { ?>
                    <p class="oldPrice mb-0">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></p>
                    <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                  <?php } ?>
                <?php } else { ?>
                  <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></p>
                <?php } ?>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <div class="clearfix"></div>
    </div>
  </div>
<?php } ?>


<section id="featured-products" class="product-store">
  <div class="container-md">
    <div class="display-header d-flex align-items-center justify-content-between">
      <h2>Featured Products</h2>
      <div class="btn-right">
        <a href="shop.html" class="text-uppercase text-hover">View all</a>
      </div>
    </div>
    <div class="product-content padding-small">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
        <div class="col mb-4">
          <div class="product-card position-relative">
            <div class="card-img">
              <img src="images/card-item1.jpg" alt="product-item" class="product-image img-fluid">
              <div class="cart-concern position-absolute d-flex justify-content-center">
                <div class="cart-button bg-light d-flex justify-content-center align-items-center">
                  <button type="button" class="btn btn-normal" data-bs-toggle="modal" data-bs-target="#modallong">
                    <svg class="shopping-carriage">
                      <use xlink:href="#shopping-carriage"></use>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-normal" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                    <svg class="quick-view">
                      <use xlink:href="#quick-view"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <!-- cart-concern -->
            </div>
            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
              <h3 class="card-title fs-6">
                <a href="single-product.html">Running shoes for men</a>
              </h3>
              <span class="card-price fw-bold">$99</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="product-wrapper">
  <h2 class="title">PRODUK TERBARU</h2>
  <hr>
  <div class="main-product">
    <?php if ($recent->num_rows() > 0) { ?>
      <?php foreach ($recent->result_array() as $p) : ?>
        <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
          <div class="card">
            <img src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="card-img-top">
            <div class="card-body">
              <p class="card-text mb-0"><?= $p['title']; ?></p>
              <?php if ($setting['promo'] == 1) { ?>
                <?php if ($p['promo_price'] == 0) { ?>
                  <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></p>
                <?php } else { ?>
                  <p class="oldPrice mb-0">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></p>
                  <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                <?php } ?>
              <?php } else { ?>
                <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['price'])); ?></p>
              <?php } ?>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
      <div class="clearfix"></div>
    <?php } else { ?>
      <div class="alert alert-warning">Upss.. Belum ada produk!</div>
    <?php } ?>
  </div>
  <?php if ($allProducts->num_rows() > 12) { ?>
    <a href="<?= base_url(); ?>products"><button class="more">Selengkapnya</button></a>
  <?php } ?>
</div>