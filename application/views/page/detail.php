<div class="wrapper">
    <?php $setting = $this->db->get('settings')->row_array(); ?>
    <div class="top">
        <div class="main-top">
            <div class="img">
                <a href="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" data-lightbox="img-1">
                    <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" alt="produk" class="jumbo-thumb">
                </a>
                <div class="img-slider">
                    <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" alt="gambar" class="thumb">
                    <?php foreach ($img->result_array() as $d) : ?>
                        <img src="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>" alt="gambar" class="thumb">
                    <?php endforeach; ?>
                </div>
            </div>



            <div class="col-lg-6 col-md-6">
                <div class="product-info">
                    <div class="element-header">
                        <h3 itemprop="name" class="display-6 text-uppercase">
                            <?= $product['title']; ?>
                        </h3>
                    </div>
                    <div class="product-price py-3">
                        <strong class="fs-5 fw-bold">Rp <?= str_replace(",", ".", number_format($product['price'])); ?></strong>
                    </div>
                    <div class="cart-wrap padding-small">
                        <div class="color-options product-select">
                            <div class="color-toggle" data-option-index="0">
                                <h5 class="widget-title text-decoration-underline pe-2">
                                    Weight:
                                </h5>
                                <ul class="select-list list-unstyled d-flex">
                                    <li class="select-item pe-3" data-val="Green" title="Green">
                                        <a href="#"><?= $product['weight']; ?> gram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-quantity">
                            <div class="stock-number text-dark"><?= $product['stock']; ?> in stock</div>
                            <div class="stock-button-wrap pt-3">
                                <?php if ($setting['promo'] == 1) { ?>
                                    <?php if ($product['promo_price'] == 0) { ?>
                                        <?php $priceP = $product['price']; ?>
                                    <?php } else { ?>
                                        <?php $priceP = $product['promo_price']; ?>
                                    <?php } ?>
                                <?php } else { ?>
                                    <?php $priceP = $product['price']; ?>
                                <?php } ?>

                                <h5 class="widget-title text-decoration-underline pe-2">
                                    Total:
                                </h5>
                                <p>Rp <span id="detailTotalPrice"><?= str_replace(",", ".", number_format($priceP)); ?></span></p>
                                <button onclick="minusProduct(<?= $priceP; ?>)">-</button><!--
                        --><input disabled type="text" value="1" id="qtyProduct" class="valueJml"><!--
                        --><button onclick="plusProduct(<?= $priceP; ?>, <?= $product['stock']; ?>)">+</button>

                                <!-- quantity-price -->
                                <div class="qty-button d-flex flex-wrap pt-3">

                                    <?php if ($this->session->userdata('login')) { ?>
                                        <button class="btn btn-black btn-medium text-uppercase me-3 mt-3 hvr-sweep-to-right" onclick="buy()">Buy Now</button>
                                        <button class="btn btn-outline-gray btn-medium text-uppercase mt-3 hvr-sweep-to-right" onclick="addCart()">Add to Cart</button>
                                    <?php } else { ?>
                                        <a href="<?= base_url(); ?>login" class="btn btn-secondary">Login</a>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="meta-product padding-small">
                        <div class="meta-item d-flex align-items-baseline">
                            <h5 class="widget-title text-decoration-underline pe-2">
                                Category:
                            </h5>
                            <ul class="select-list list-unstyled d-flex">
                                <li data-value="S" class="select-item">
                                    <a href="#">Men</a>,
                                </li>
                                <li data-value="S" class="select-item">
                                    <a href="#">Casual</a>,
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <hr>
    <div class="description">
        <?= nl2br($product['description']); ?>
    </div>
    <section class="product-info-tabs">
      <div class="container">
        <div class="row">
          <div class="tabs-listing">
            <nav>
              <div
                class="nav nav-tabs d-flex flex-wrap justify-content-center border-0 bg-gray"
                id="nav-tab"
                role="tablist"
              >
                <button
                  class="nav-link active text-dark fs-5 pe-5 border-0"
                  id="nav-home-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-home"
                  type="button"
                  role="tab"
                  aria-controls="nav-home"
                  aria-selected="true"
                >
                  Description
                </button>
                <button
                  class="nav-link text-dark fs-5 pe-5 border-0"
                  id="nav-information-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-information"
                  type="button"
                  role="tab"
                  aria-controls="nav-information"
                  aria-selected="false"
                >
                  Additional information
                </button>
                <button
                  class="nav-link text-dark fs-5 pe-5 border-0"
                  id="nav-review-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-review"
                  type="button"
                  role="tab"
                  aria-controls="nav-review"
                  aria-selected="false"
                >
                  Reviews
                </button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div
                class="tab-pane fade show active padding-small"
                id="nav-home"
                role="tabpanel"
                aria-labelledby="nav-home-tab"
              >
                <p>Product Description</p>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                  Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                  erat ut turpis. Suspendisse urna viverra non, semper suscipit,
                  posuere a, pede. Donec nec justo eget felis facilisis
                  fermentum. Aliquam porttitor mauris sit amet orci. Aenean
                  dignissim pellentesque felis. Phasellus ultrices nulla quis
                  nibh. Quisque a lectus. Donec consectetuer ligula vulputate
                  sem tristique cursus.
                </p>
                <ul style="list-style-type: disc" class="list-unstyled ps-4">
                  <li>Donec nec justo eget felis facilisis fermentum.</li>
                  <li>Suspendisse urna viverra non, semper suscipit pede.</li>
                  <li>Aliquam porttitor mauris sit amet orci.</li>
                </ul>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                  Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                  erat ut turpis. Suspendisse urna viverra non, semper suscipit,
                  posuere a, pede. Donec nec justo eget felis facilisis
                  fermentum. Aliquam porttitor mauris sit amet orci. Aenean
                  dignissim pellentesque felis. Phasellus ultrices nulla quis
                  nibh. Quisque a lectus. Donec consectetuer ligula vulputate
                  sem tristique cursus.
                </p>
              </div>
              <div
                class="tab-pane fade padding-small"
                id="nav-information"
                role="tabpanel"
                aria-labelledby="nav-information-tab"
              >
                <p>It is Comfortable and Best</p>
                <p>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum. Duis aute irure dolor in
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat
                  nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id
                  est laborum.
                </p>
              </div>
              <div
                class="tab-pane fade padding-small"
                id="nav-review"
                role="tabpanel"
                aria-labelledby="nav-review-tab"
              >
                <div class="review-box d-flex flex-wrap">
                  <div class="col-lg-6 d-flex flex-wrap">
                    <div class="col-md-2 me-3 mb-3">
                      <div class="image-holder">
                        <img
                          src="images/review-item1.jpg"
                          alt="review"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="review-content">
                        <div
                          class="rating-container d-flex align-items-center mb-3"
                        >
                          <div class="rating" data-rating="1" onclick="rate(1)">
                            <svg class="star-fill" width="16" height="16">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="2" onclick="rate(1)">
                            <svg class="star-fill" width="16" height="16">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="3" onclick="rate(1)">
                            <svg class="star-fill" width="16" height="16">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="4" onclick="rate(1)">
                            <svg class="star-half" width="16" height="16">
                              <use xlink:href="#star-half"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="5" onclick="rate(1)">
                            <svg class="star-empty" width="16" height="16">
                              <use xlink:href="#star-empty"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="review-header">
                          <span class="author-name">Mina Brown</span>
                          <span class="review-date">– 03/07/2023</span>
                        </div>
                        <p>
                          Vitae tortor condimentum lacinia quis vel eros donec
                          ac. Nam at lectus urna duis convallis convallis
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex flex-wrap">
                    <div class="col-md-2 me-3 mb-3">
                      <div class="image-holder">
                        <img
                          src="images/review-item2.jpg"
                          alt="review"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="review-content">
                        <div
                          class="rating-container d-flex align-items-center mb-3"
                        >
                          <div class="rating" data-rating="1" onclick="rate(1)">
                            <svg class="star-fill" width="16" height="16">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="2" onclick="rate(1)">
                            <svg class="star-fill" width="16" height="16">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="3" onclick="rate(1)">
                            <svg class="star-fill" width="16" height="16">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="4" onclick="rate(1)">
                            <svg class="star-half" width="16" height="16">
                              <use xlink:href="#star-half"></use>
                            </svg>
                          </div>
                          <div class="rating" data-rating="5" onclick="rate(1)">
                            <svg class="star-empty" width="16" height="16">
                              <use xlink:href="#star-empty"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="review-header">
                          <span class="author-name">Jenny Rose</span>
                          <span class="review-date">– 03/06/2022</span>
                        </div>
                        <p>
                          Vitae tortor condimentum lacinia quis vel eros donec
                          ac. Nam at lectus urna duis convallis convallis
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    function plusProduct(price, stock) {
        let inputJml;
        inputJml = parseInt($("input.valueJml").val());
        inputJml = inputJml + 1;
        if (inputJml <= stock) {
            $.ajax({
                url: `<?= base_url(); ?>products/getgrosir?product=<?= $product['productId']; ?>&stock=${inputJml}`,
                type: "get",
                async: true,
                success: function(response) {
                    if (response) {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("Rp " + number_format(response).split(",").join(".") + " <small style='font-size: 13px; font-weight: normal' class='badge badge-info'>grosir</small>");
                        const newPrice = inputJml * response;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    } else {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("Rp " + number_format(price).split(",").join("."));
                        const newPrice = inputJml * price;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    }
                }
            })
        }
    }

    function minusProduct(price) {
        let inputJml;
        inputJml = parseInt($("input.valueJml").val());
        inputJml = inputJml - 1;
        if (inputJml >= 1) {
            $.ajax({
                url: `<?= base_url(); ?>products/getgrosir?product=<?= $product['productId']; ?>&stock=${inputJml}`,
                type: "get",
                async: true,
                success: function(response) {
                    if (response) {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("Rp " + number_format(response).split(",").join(".") + " <small style='font-size: 13px; font-weight: normal' class='badge badge-info'>grosir</small>");
                        const newPrice = inputJml * response;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    } else {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("Rp " + number_format(price).split(",").join("."));
                        const newPrice = inputJml * price;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    }
                }
            })
        }
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        var n = !isFinite(+number) ? 0 : +number
        var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
        var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
        var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
        var s = ''

        var toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec)
            return '' + (Math.round(n * k) / k)
                .toFixed(prec)
        }

        // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
        }

        return s.join(dec)
    }

    function buy() {
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $product['productId']; ?>,
                qty: $("#qtyProduct").val()
            },
            success: function(data) {
                location.href = "<?= base_url(); ?>cart"
            }
        })
    }

    function addCart() {
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $product['productId']; ?>,
                qty: $("#qtyProduct").val()
            },
            success: function(data) {
                $(".navbar-cart-inform").html(`<i class="fa fa-shopping-cart"></i> Keranjang(<?= count($this->cart->contents()) + 1; ?>)`);
                swal({
                        title: "Berhasil Ditambah ke Keranjang",
                        text: `<?= $product['title']; ?>`,
                        icon: "success",
                        buttons: true,
                        buttons: ["Lanjut Belanja", "Lihat Keranjang"],
                    })
                    .then((cart) => {
                        if (cart) {
                            location.href = "<?= base_url(); ?>cart"
                        }
                    });
            }
        })
    }

    // slider product
    const containerImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img");
    const jumboImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img img.jumbo-thumb");
    const jumboHrefImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img a");
    const thumbsImgProduct = document.querySelectorAll("div.wrapper div.top div.main-top div.img div.img-slider img.thumb");

    containerImgProduct.addEventListener('click', function(e) {
        if (e.target.className == 'thumb') {
            jumboImgProduct.src = e.target.src;
            jumboHrefImgProduct.href = e.target.src;

            thumbsImgProduct.forEach(function(thumb) {
                thumb.className = 'thumb';
            })
        }
    })
</script>