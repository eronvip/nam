<?php
    include('function/cart.php');
    include('function/product.php');
    include('inc/ketnoi.php');

    $sv = new Cart();
    $sv_sp = new Product();
    $number_cart = 0;
    $price_total = 0;
    $list_cart = [];
    if (!empty($_POST)) {
        $sv->addToCart($_POST);
    }
    if (isset($_SESSION['CART'])) {
        $number_cart = count($_SESSION['CART']);
        for ($i = 0; $i < $number_cart; $i++) {
            $sp = $sv_sp->getProductbyId($sv->getIdSPbySession($_SESSION['CART'][$i],'id_sp'), $ketnoi);
            $price_total += $sv->getIdSPbySession($_SESSION['CART'][$i],'number') * $sp['Gia_Giam'];
            array_push($list_cart, $sp);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NN shop</title>
        <!-- CSS preloader -->
        <link href="/css/loader.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/css/megatron-template.css" rel="stylesheet">
        <!-- CSS modules -->
        <link href="/css/icomoon.css" rel="stylesheet">
        <link href="/css/fontello.css" rel="stylesheet">
        <link href="/css/flexslider.css" rel="stylesheet">
        <link href="/css/jcarousel.css" rel="stylesheet">
        <link href="/css/owl.carousel.css" rel="stylesheet">
        <link href="/css/owl.theme.css" rel="stylesheet">
        <link href="/css/cloudzoom.css" rel="stylesheet">
        <link href="/css/sfmenu.css" rel="stylesheet">
        <link href="/css/isotope.css" rel="stylesheet">
        <link href="/css/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
        <link href="/css/jquery.fancybox.css" rel="stylesheet">
        <link href="/css/hoverfold.css" rel="stylesheet">
        <script src="/js/jquery-1.10.2.min.js"></script>
    </head>
<body class="responsive">
    <!-- <div class="loader">
      <div class="bubblingG"> <span id="bubblingG_1"> </span> <span id="bubblingG_2"> </span> <span id="bubblingG_3"> </span> </div>
    </div> -->
<div id="outer">
  <div id="outer-canvas"> <!-- Navbar -->
    <header>
      <!-- Back to top -->
      <div class="back-to-top"><span class="icon-arrow-up-4"></span></div>
      <!-- //end Back to top -->
      <section class="navbar">
        <div class="background">
          <div class="container">
            <!-- Logo -->
            <div class="navbar-logo pull-left">
                <a href="/index.hphp">
                    <img src="images/header-logo.png" alt="">
                </a>
            </div>
            <div class="clearfix visible-sm"></div>
            <!-- //end Logo -->
            <!-- Secondary menu -->
            <div class="navbar-secondary-menu pull-right hidden-xs">
               <div class="btn-group compact-hidden">
                   <a href="#" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="icon icon-vcard"></span> Tài Khoản <span class="caret"></span>
                   </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Thong tin tài khoản</a></li>
                      <li><a href="#">Yêu thích</a></li>
                      <li><a href="#">Thanh toán</a></li>
                      <li class="divider"></li>
                      <li><a href="/dang-nhap.php">Đăng nhập</a></li>
                      <li><a href="/dang-xuat.php">Đăng Ký</a></li>
                    </ul>
              </div>

               <div class="btn-group">
                  <a href="#"  class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                       <span class="compact-hidden">Giỏ Hàng - <strong><?= number_format($price_total) ?> VNĐ</strong></span>
                       <span class="icon-xcart-animate"><span class="box"><?= $number_cart; ?></span>
                       <span class="handle"></span></span>
                   </a>
                    <div class="dropdown-menu pull-right shoppingcart-box" role="menu"> Sản Phẩm Hiện có
                       <ul class="list">
                           <?php
                            for($i = 0; $i < $number_cart; $i++){
                           ?>
                            <li class="item"> <a href="product_default.html" class="preview-image"><img class="preview" src="/images/products/<?= $list_cart[$i]['Anh']?>" alt=""></a>
                              <div class="description"> <a href="#"><?= $list_cart[$i]['TenSanPham']?></a> <strong class="price"><?= $sv->getIdSPbySession($_SESSION['CART'][$i],'number');?> x <?= number_format($list_cart[$i]['DonGia']) ?>đ</strong> </div>
                            </li>
                           <?php
                           }
                           ?>
                       </ul>
                       <div class="total">Tổng tiền: <strong><?= number_format($price_total) ?> VNĐ</strong></div>
                       <a href="#" class="btn btn-mega">Thanh Toán</a>
                       <div class="view-link"><a href="shopping_cart.html">Vào Giỏ hàng </a></div>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <form class="navbar-search form-inline hidden-xs pull-right" role="form">
              <div class="form-group">
                <button type="submit" class="button"><span class="icon-search-2"></span></button>
                <input type="text" class="form-control" value="Tìm kiếm" onblur="if (this.value == '') {this.value = 'Tìm kiếm';}" onfocus="if(this.value == 'Tìm kiếm') {this.value = '';}">
              </div>
            </form>
            <!-- //end Search -->
            <!-- Main menu -->
            <dl class="navbar-main-menu hidden-xs">
                <dt class="item">
                  <ul class="sf-menu">
                    <li>
                        <a href="index.html" class="btn-main">
                            <span class="icon icon-home"></span>
                        </a>
                    </li>
                  </ul>
                </dt>
                <dt class="item">
                  <ul class="sf-menu">
                    <li><a href="san-pham.php">Sản Phẩm</a></li>
                  </ul>
                </dt>
                <dd></dd>
                <dt class="item">
                  <ul class="sf-menu">
                    <li> <a href="https://Lazada.vn"> Sản phẩm liên kết Lazada.vn </a></li>
                  </ul>
                </dt>
              <dt class="item">
                <ul class="sf-menu">
                  <li> <a href="https://sendo.vn"> Sản phẩm liên kết Sendo.vn </a></li>
                </ul>
              </dt>
              <dt class="item">
                <ul class="sf-menu">
                  <li> <a href="blog.html"> Blog </a>
                    <ul>
                      <li><a href="blog_posts_table_view.html"> Table View </a> </li>
                      <li> <a href="blog_single_post.html"> Single Post </a> </li>
                    </ul>
                  </li>
                </ul>
              </dt>
              <dd></dd>
              <dt class="item">
                  <li><a href="contacts.html" class="btn-main line">Liên hệ</a> </li>
              </dt>
              <dd></dd>
            </dl>
            <!-- //end Main menu -->
          </div>
        </div>

        <div class="navbar-switcher-container">
          <div class="navbar-switcher"> <span class="i-inactive"><img src="images/logo-1.png" width="35" height="35" alt=""></span> <span class="i-active icon-cancel-3"></span> </div>
        </div>
        <!-- //end Navbar switcher -->

      </section>

      <!-- Navbar height -->
      <div class="navbar-height-inner"></div>
      <!-- Navbar height -->

      <!-- Navbar height -->
      <div class="navbar-height"></div>
      <!-- Navbar height -->

    </header>
    <!-- //end Navbar -->
