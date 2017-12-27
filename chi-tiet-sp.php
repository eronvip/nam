<?php
    session_start();
    //unset($_SESSION['CART']);
    include('layouts/header.php');
?>
        <!-- //end Navbar -->
        <!-- Breadcrumbs -->
        <section class="container">
            <nav class="breadcrumbs"><a href="/index.php">Trang Chủ</a>
                <span class="divider">›</span> Chi Tiết Sản Phẩm
            </nav>
        </section>
        <!-- //end Breadcrumbs -->
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $sv_sp = new Product();
    $sp = $sv_sp->getProductbyId($id, $ketnoi);
?>
    <!-- One column content -->
    <section class="container">
        <!-- Product view -->
        <div class="product-view row">
            <div class="col-sm-6 col-md-5 col-lg-5">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="/images/products/<?= $sp['Anh'] ?>">
                            <img src="/images/products/<?= $sp['Anh'] ?>"/>
                        </li>
                        <li data-thumb="/images/products/<?= $sp['Anh3'] ?>">
                            <img src="/images/products/<?= $sp['Anh3'] ?>"/>
                        </li>
                        <li data-thumb="/images/products/<?= $sp['Anh2'] ?>">
                            <img src="/images/products/<?= $sp['Anh2'] ?>"/>
                        </li>
                        <li data-thumb="/images/products/<?= $sp['Anh2'] ?>">
                            <img src="/images/products/<?= $sp['Anh2'] ?>"/>
                        </li>
                    </ul>
                </div>
                <!-- FlexSlider -->
                <script defer src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>

                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">

                <!-- Product label -->
                <div class="product-label">
                    <div class="box-wrap">
                        <div class="box-wrap-top"></div>
                        <div class="box-wrap-bot"></div>
                        <div class="box-wrap-center"></div>
                        <div class="box">
                            <div class="box-content">
                                <h2><?= $sp['TenSanPham'] ?></h2>
                                <span class="price old"><?= number_format($sp['DonGia']) ?>đ</span> <span
                                        class="price new"><?= number_format($sp['Gia_Giam']) ?>đ</span> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //end Product label -->

                <!-- Description -->
                <div class="product-description"><span class="rating"> <i class="icon-star-3"></i> <i
                                class="icon-star-3"></i> <i class="icon-star-3"></i> <i class="icon-star-3"></i> <i
                                class="icon-star-empty"></i> </span>
                    <form name="addToCart" method="post">
                        <input type="hidden" name="id_san_pham" value="<?= $id ?>">
                        <div class="option"><b>Số Lượng:</b>
                            <div class="input-group quantity-control">
                                <span class="input-group-addon">&minus;</span>
                                <input name="number_pro" type="text" class="form-control" value="1">
                                <span class="input-group-addon">+</span>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <button id="add-to-cart" class="btn btn-mega btn-lg" type="submit" <?= $sv->hasProduct($id) ? 'disabled': '' ?>>Mua Ngay</button>
                    </form>
                    <div class="panel-group accordion-simple" id="product-accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#product-accordion" href="#product-description">
                                    <span class="arrow-down icon-arrow-down-4"></span>
                                    <span class="arrow-up icon-arrow-up-4"></span> Thông tin sản phẩm
                                </a>
                            </div>
                            <div id="product-description" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <?= $sp['ChiTietSanPham'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading"><a data-toggle="collapse" data-parent="#product-accordion"
                                                          href="#product-shipping" class="collapsed"> <span
                                            class="arrow-down icon-arrow-down-4"></span> <span
                                            class="arrow-up icon-arrow-up-4"></span> Shipping &amp; Returns </a></div>
                            <div id="product-shipping" class="panel-collapse collapse">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //end Description -->

            </div>

            <!-- Related Products -->
            <section class="col-sm-12 col-md-3 col-lg-3 slider-products  module">
                <h3>Sản phẩm liên quan</h3>
                <div class="products-widget jcarousel-skin-previews vertical">
                    <ul class="slides">
                        <li>
                            <div class="product"><a href="product_default.html" class="preview-image"><img
                                            class="img-responsive product_activ"
                                            src="images/products/product-07-small.jpg" alt=""></a>
                                <p class="name"><a href="product_default.html" class="preview-image">Raglan Sleeve Tee
                                        Maison Scotch</a></p>
                                <span class="rating"> </span> <span class="price">$44.95</span></div>
                        </li>

                    </ul>
                </div>
            </section>
            <!-- //end Related Products -->

        </div>
        <!-- //end Product view --> <!-- Services -->
        <section class="services-block single small row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 divider-right"><a href="#" class="item"><span
                            class="icon icon-tags-2"></span>
                    <div class="text"><span class="title">Special Offer 1+1=3</span> <span class="description">Get a gift!</span>
                    </div>
                </a></div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 divider-right"><a href="#" class="item"> <span
                            class="icon icon-credit-card"></span>
                    <div class="text"><span class="title">FREE REWARD CARD</span> <span class="description">Worth 10$, 50$, 100$</span>
                    </div>
                </a></div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 divider-right"><a href="#" class="item"><span
                            class="icon icon-users-2"></span>
                    <div class="text"><span class="title">Join Our Club</span></div>
                </a></div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 divider-right"><a href="#" class="item"> <span
                            class="icon icon-truck"></span>
                    <div class="text"><span class="title">Free Shipping</span></div>
                </a></div>
        </section>
        <!-- //end Services -->
        <!-- Upsell products -->
        <section class="slider-products content-box">
            <h3>Sản phẩm mới</h3>
            <!-- Products list -->
            <div class="products-list-small">
                <ul class="slides">
                    <li>
                        <div class="product-preview">
                            <div class="preview animate scale"><a href="#"><img
                                            src="images/products/product-03-small.jpg" alt=""></a> <a
                                        href="_ajax_view-product.html" class="quick-view"> <span
                                            class="icon-zoom-in-2"></span> View </a></div>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- //end Products list -->
        </section>
        <!-- //end Upsell products -->

    </section>
    <!-- //end Two columns content -->

    <!-- Footer -->
<?php
include('layouts/footer.php');
?>