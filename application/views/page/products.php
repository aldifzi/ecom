<div class="wrp">
    <section class="hero-section position-relative bg-gray padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h1 class="display-2 text-uppercase text-dark">Shop</h1>
                        <div class="breadcrumbs">
                            <span class="item">
                                <a href="index-2.html">Home ></a>
                            </span>
                            <span class="item">Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="dropdown filter-for-mobile">
        <a class="btn btn-secondary btn-sm mt-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=latest" class="dropdown-item">Terbaru</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=az" class="dropdown-item">A-Z</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=za" class="dropdown-item">Z-A</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=pmin" class="dropdown-item">Harga Terendah</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=pmax" class="dropdown-item">Harga Tertinggi</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?promo=true" class="dropdown-item">Promo</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?condition=1" class="dropdown-item">Baru</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?condition=2" class="dropdown-item">Bekas</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>" class="btn dropdown-item btn-danger text-danger">Reset Filter</a>
        </div>
    </div>
    <div class="core">

        <?php $setting = $this->db->get('settings')->row_array(); ?>
        <div class="main-product">
            <?php if ($products->num_rows() > 0) { ?>
                <?php foreach ($products->result_array() as $p) : ?>
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
                <div class="alert alert-warning">Tidak ada produk yang dapat ditampilkan</div>
            <?php } ?>
        </div>

        <div class="filter">
            <div class="filter-main">
                <div class="top">

                </div>
                <div class="bodf">
                    <p class="title">
                        Sort
                    </p>
                    <a href="<?= base_url(); ?>products?ob=latest">Latest</a>
                    <a href="<?= base_url(); ?>products?ob=az">A-Z</a>
                    <a href="<?= base_url(); ?>products?ob=za">Z-A</a>
                    <a href="<?= base_url(); ?>products?ob=pmin">Lowest Price</a>
                    <a href="<?= base_url(); ?>products?ob=pmax">Highest Price</a>
                    <hr>
                    <p class="title">
                        Category
                    </p>
                    <a href="<?= base_url(); ?>products">All</a>
                    <a href="<?= base_url(); ?>c/men-shoes">Men Shoes</a>
                    <a href="<?= base_url(); ?>c/women-shoes">Women Shoes</a>
                    <hr>
                    <p class="title">
                        Filter By Price
                    </p>
                    <form action="<?= base_url(); ?>products" method="get">
                        <input type="number" placeholder="Minimum Price" name="minprice" class="form-control">
                        <input type="number" placeholder="Maximum Price" name="maxprice" class="form-control mt-2">
                        <button type="submit" class="btn btn-secondary btn-block btn-sm mt-2">Apply</button>
                    </form>
                    <hr>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>