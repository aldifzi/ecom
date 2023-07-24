<?php $banner = $this->Settings_model->getBanner(); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
    foreach ($banner->result_array() as $key => $value) {
      $active = ($key == 0) ? 'active' : '';
      echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '" class="' . $active . '"></li>';
    }
    ?>
  </ol>
  <div class="carousel-inner">
    <?php
    foreach ($banner->result_array() as $key => $value) {
      $active = ($key == 0) ? 'active' : '';
      echo '<div class="carousel-item ' . $active . '">
            <a href="' . $value['url'] . '"><img src="' . base_url() . 'assets/images/banner/' . $value['img'] . '"></a>
        </div>';
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<section id="intro" class="position-relative">
      <div class="container-lg">
        <div class="swiper main-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card position-relative border-none first">
                <img src="https://demo.templatesjungle.com/stylish/images/card-image1.jpg" alt="shoes" class="img-fluid border-rounded-10 first">
                <div class="cart-concern position-absolute">
                  <h2 class="card-title">
                    <a href="#" class="light">Stylish shoes for Women</a>
                  </h2>
                  <a href="shop.html" class="text-uppercase light mt-3 d-block btn-arrow">Shop Now
                    <svg class="arrow-right" width="20" height="20">
                      <use xlink:href="#arrow-right"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="card position-relative border-none">
                    <img src="https://demo.templatesjungle.com/stylish/images/card-image2.jpg" alt="shoes" class="img-fluid border-rounded-10">
                    <div class="cart-concern position-absolute">
                      <h2 class="card-title style-2">
                        <a href="#" class="light">Sports Wear</a>
                      </h2>
                      <a href="shop.html" class="text-uppercase light mt-3 d-block btn-arrow">Shop Now
                        <svg class="arrow-right" width="20" height="20">
                          <use xlink:href="#arrow-right"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card position-relative border-none">
                    <img src="https://demo.templatesjungle.com/stylish/images/card-image3.jpg" alt="shoes" class="img-fluid border-rounded-10">
                    <div class="cart-concern position-absolute">
                      <h2 class="card-title style-2">
                        <a href="#" class="light">Fashion Shoes</a>
                      </h2>
                      <a href="shop.html" class="text-uppercase light mt-3 d-block btn-arrow">Shop Now
                        <svg class="arrow-right" width="20" height="20">
                          <use xlink:href="#arrow-right"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination position-absolute"></div>
      </div>
    </section>