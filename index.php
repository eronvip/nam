<?php
    include('layouts/header.php');
    include('inc/ketnoi.php');
 ?>
    <!-- Slider -->
    <section class="main-slider container hidden-xs">
        <div class="owl-slider-outer">
           <a class="owl-slider-prev"></a>
           <a class="owl-slider-next"></a>
           <div class="owl-slider">

            <?php
                $laybanner = "SELECT * FROM banner";
                $qr_laybanner = mysqli_query($ketnoi, $laybanner);
                while($banner = mysqli_fetch_array($qr_laybanner)) {
            ?>
           <div class="item">
               <img src="/images/slider/<?=$banner['Anh']?>" alt="" style="width: 100% !important;">
               <a href="index.html" class="title-slide-01">
                   <span class="big">Sale</span>
                   <span class="middle">up to 40% OFF</span>
               </a>
           </div>
            <?php } ?>

        </div>

    </section>
    <!-- //end Slider -->
    <!-- Services -->
    <section class="services-block hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-lg-4 divider-right">
               <a class="item">
                    <span class="icon icon-airplane-2"></span>
                    <span class="title">Miễn phí giao hàng</span>
                    <span class="description">Cho đươn hàng trên 300k</span>
                 </a>
            </div>
        <div class="col-xs-12 col-sm-4 col-lg-4 divider-right">
            <a class="item">
                <span class="icon icon-clock"></span>
                <span class="title">7 ngày đổi trả</span>
                <span class="description">...</span>
            </a>
        </div>
          <div class="col-xs-12 col-sm-4 col-lg-4">
               <a class="item">
                   <span class="icon icon-umbrella "></span>
                   <span class="title">Hỗ trợ 24/7 </span>
                   <span class="description">online consultations</span>
                </a>
            </div>
        </div>
      </div>
    </section>
    <!-- //end Services -->
    <!-- Two columns content -->
    <section class="container content">
      <div class="row">
        <!-- Left column -->
        <aside class="col-sm-4 col-md-3 col-lg-3 content-aside">
          <!-- Shop by categories -->
          <section>
            <h3>Danh Mục Sản Phẩm</h3>
            <ul class="expander-list">
                <?php
                    $laydm = "SELECT * FROM danh_muc";
                    $qr_laydm = mysqli_query($ketnoi, $laydm);

                    while($dm = mysqli_fetch_array($qr_laydm)) {
                 ?>
                <li>
                    <span class="name">
                        <a href="/danh-muc-sp.php?id=<?=$dm['id']?>"><?=$dm['TenDanhMuc']?></a>
                    </span>
                </li>
            <?php } ?>
            </ul>
          </section>
          <!-- //end Shop by categories -->
          <div style="margin-bottom: 30px;"></div>

        <!-- facebook -->
        <section class="blog-widget-small">
          <h3>facebook</h3>
          <div class="posts flexslider">
            links facebook
          </div>
        </section>
        <!-- //facebook -->
        <!-- quảng cáo -->
        <section class="blog-widget-small">
          <h3>Quảng cáo</h3>
          <div class="posts flexslider">
            links quảng cáo
          </div>
        </section>
        <!-- //quảng cáo -->
        </aside>
        <!-- //end Left column -->

        <!-- Right column -->
        <section class="col-sm-8 col-md-9 col-lg-9 content-center">
          <!-- Featured Products -->
          <section>
            <h3>sản phẩm mới nhất</h3>

            <!-- Products list -->
            <div class="row products-list">

                <?php
                    $laysp = "SELECT * FROM san_pham ORDER BY id DESC LIMIT 9";
                    $qr_laysp = mysqli_query($ketnoi, $laysp);
                    while($sp = mysqli_fetch_array($qr_laysp)) {
                 ?>

                <div class="product-preview">
                    <div class="preview animate scale">
                        <a href="/chi-tiet-sp.php?id=<?=$sp['id']?>" class="preview-image">
                            <img class="img-responsive animate scale" src="/images/products/<?=$sp['Anh']?>" width="270" height="328" alt="">
                        </a>
                    <ul class="product-controls-list right">
                        <li><span class="label label-sale">Giảm</span></li>
                        <li><span class="label">-20%</span></li>
                    </ul>
                    <ul class="product-controls-list right hide-right">
                        <li class="top-out"></li>
                        <li><a href="#" class="circle"><span class="icon-heart"></span></a></li>
                        <li><a href="#" class="circle"><span class="icon-justice"></span></a></li>
                        <li><a href="#" class="cart"><span class="icon-basket"></span></a></li>
                    </ul>
                    <a href="/chi-tiet-sp.php" class="quick-view hidden-xs">Quick View </a>
                </div>
                <h3 class="title">
                    <a href="#"><?=$sp['TenSanPham']?></a>
                </h3>
                <span class="price old"><?=number_format($sp['DonGia'])?>đ</span>
                <span class="price new"><?=number_format($sp['Gia_Giam'])?>đ</span>
            </div>
                <?php } ?>
            </div>
            <!-- //end Products list -->
            <!-- Product view compact -->
            <div class="product-view-ajax">
              <div class="ajax-loader progress progress-striped active">
                <div class="progress-bar progress-bar-danger" role="progressbar"></div>
              </div>
              <div class="layar"></div>
              <div class="product-view-container"> </div>
            </div>
            <!-- //end Product view compact -->
          </section>
          <div class="section-divider"></div>
          <!-- On Sale Products -->
          <section>
            <h3>Sản Phẩm bán chạy</h3>
            <!-- Products list -->
            <div class="row">
                <div class="product-carousel">
                    <?php
						$laysp = "SELECT * FROM san_pham ORDER BY RAND() LIMIT 9";
						$qr_laysp = mysqli_query($ketnoi, $laysp);
						while($sp1 = mysqli_fetch_array($qr_laysp)) {
					 ?>
                    <div class="item">
                      <div class="product-preview">
                        <div class="preview animate scale">
                            <a href="/chi-tiet-sp.php?id=<?=$sp1['id']?>" class="preview-image">
                                <img class="img-responsive animate scale" src="/images/products/<?=$sp1['Anh']?>" width="270" height="328" alt="">
                            </a>
                          <ul class="product-controls-list right">
                            <li><span class="label label-sale">SALE</span></li>
                            <li><span class="label">-20%</span></li>
                          </ul>
                          <a href="" class="quick-view hidden-xs">
                              <span class="icon-zoom-in-2"></span> Quick View
                          </a>
                        </div>
                        <h3 class="title"><a href="#"><a href="#"><?=$sp1['TenSanPham']?></a></a></h3>
                        <span class="price old"><?=number_format($sp1['DonGia'])?>đ</span> <span class="price new"><?=number_format($sp1['Gia_Giam'])?>đ</span> </div>
                    </div>
                    <?php } ?>
                </div>
              <!-- product view ajax container -->
              <div class="product-view-ajax-container"> </div>
              <!-- //end product view ajax container -->
            </div>
            <!-- //end Products list -->
          </section>
          <!-- //end On Sale Products -->
        </section>
        <!-- //end Right column -->
      </div>
    </section>
    <!-- Footer -->
    <?php
        include('layouts/footer.php');
     ?>
