<?php
$categoriesLimit = $this->Categories_model->getCategoriesLimit();
$setting = $this->Settings_model->getSetting();
$sosmed = $this->Settings_model->getSosmed();
$footerhelp = $this->Settings_model->getFooterHelp();
$footerinfo = $this->Settings_model->getFooterInfo();
$rekening = $this->db->get('rekening');
?>
<?php echo $this->session->flashdata('subscriber'); ?>
<footer style="background-color: #212529;">

    <div class="information">
        <div class="main">

            <div class="item item-hide">
                <h3 class="title">KATEGORI</h3>
                <?php foreach ($categoriesLimit->result_array() as $c) : ?>
                    <a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"><?= $c['name']; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="item">
                <h3 class="title">HALAMAN</h3>
                <?php foreach ($footerinfo->result_array() as $f) : ?>
                    <a href="<?= base_url(); ?><?= $f['slug']; ?>"><?= $f['title']; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="item">
                <h3 class="title">BANTUAN</h3>
                <?php foreach ($footerhelp->result_array() as $f) : ?>
                    <a href="<?= base_url(); ?><?= $f['slug']; ?>"><?= $f['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="information information-for-mobile">
        <div class="main">
            <div class="item">
                <h3 class="title">KATEGORI</h3>
                <?php foreach ($categoriesLimit->result_array() as $c) : ?>
                    <a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"><?= $c['name']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="mb-0">Copyright &copy;<span id="footer-cr-years"></span> <?= $this->Settings_model->general()["app_name"]; ?> by .</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.3/swiper-bundle.min.js" integrity="sha512-QffynxUqAt8YnO9jTkUP2yb1ijdpwTVmoPhH5x6l8A+Fkzff56Sc3sTstA7hSxQUOhgtm6MMz4uD92w9tDS+TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= base_url();  ?>assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?= base_url();  ?>assets/js/plugins.js"></script>
<script type="text/javascript" src="<?= base_url();  ?>assets/js/script.js"></script>
<script src="<?= base_url();  ?>assets/js/modernizr.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/jquery.countdown.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    $("i.icon-search-navbar").on('click', function() {
        $("div.search-form").slideDown('fast');
        $("div.search-form input").focus();
    })

    $("div.search-form i").on('click', function() {
        $("div.search-form").slideUp('fast');
    })

    $("i.fa-bars").on('click', function() {
        $("div.dropdown-mobile-menu").slideToggle('fast');
    })

    const years = new Date().getFullYear();
    $("#footer-cr-years").text(years);

    $("#countdownPromo").countdown({
        date: "<?= $setting['promo_time']; ?>",
        render: function(data) {
            var el = $(this.el);
            el.empty()
                .append(
                    this.leadingZeros(data.days, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.hours, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.min, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.sec, 2)
                );
        },
    });

    //loading screen
    $(window).ready(function() {
        $(".loading-animation-screen").fadeOut("slow");
    })

    // detail
    $("#detailBtnPlusJml").click(function() {
        var val = parseInt($(this).prev('input').val());
        $(this).prev('input').val(val + 1).change();
        return false;
    })

    $("#detailBtnMinusJml").click(function() {
        var val = parseInt($(this).next('input').val());
        if (val !== 1) {
            $(this).next('input').val(val - 1).change();
        }
        return false;
    })
</script>

</html>