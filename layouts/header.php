<?php 
session_start();
	$url = "/";
	//include('inc/ketnoi.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NN Shop</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<script src="/js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="i/mages/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>0934 07 27 24</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>ldc.longnd@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a  href="../index.php">
								<img style="height: 90px;" src="/images/home/logo.png" alt="" />
							</a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li>
									<a href="../pages/tai-khoan.php"><i class="fa fa-user"></i> Tài Khoản</a>
								</li>
								<li>
									<a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh Toán</a>
								</li>
								<li>
									<a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a>
								</li>
								<?php 
									if(isset($_SESSION['login'])) {
										$ketnoi = mysqli_connect("localhost", "root", "", "nam");
										mysqli_set_charset($ketnoi, "utf8");
										$email = $_SESSION['login'];
										$user = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM thanh_vien WHERE Email='".$email."'"));
									?>
									<div class="mainmenu pull-left">
										<ul class="nav navbar-nav collapse navbar-collapse">
											<li class="dropdown"><a href="#"><i class="fa fa-user"></i> Xin Chào: <b><?=$user['TenThanhVien'];?></b></a>
			                                    <ul role="menu" class="sub-menu">
			                                        <li><a href="">Thông tin tài khoản</a></li>
													<li><a href="">Lịch sử mua hàng</a></li> 
													<li><a href="">Đăng xuất</a></li> 
			                                    </ul>
			                                </li> 
											
										</ul>
									</div>
		
									<?php
									} else {
								 ?>
									<li>
										<a href="" data-toggle="modal" data-target=".bs-example-modal-lg">
											<i class="fa fa-lock"></i> Đăng Nhập
										</a>
									</li>
								<?php 
									}
								 ?>
								<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content">
								    	<div class="dangnhap">
								    		<h2>Đăng Nhập</h2>
											<form action="../pages/xuly/dang-nhap.php" method="POST">
												<div class="form-group">
													<span>Email:</span>
													<input class="form-control" type="email" name="email" id="em" placeholder="Email đăng nhập">
												</div>
												<div class="form-group">
													<span>Mật Khẩu:</span>
													<input class="form-control" type="password" name="matkhau" id="mk" placeholder="Mật khẩu đăng nhập">
												</div>
												<div id="tb" class="text-danger" style="color: red; font-weight:bold;"></div>
												<div>
													<input type="checkbox" name="ghinhodangnhap"> Ghi nhớ đăng nhập
													<a href="" style="float:right;">Quên mật khẩu</a>
												</div>
												<button id="dn" class="btn btn-info">Đăng Nhập</button>
											</form>
								    	</div>
								    </div>
								  </div>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="../index.php" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="#">Danh Mục<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/pages/san-pham.php">Sản Phẩm</a></li>
										<li><a href="/pages/thanh-toan.php">Thanh Toán</a></li> 
										<li><a href="/pages/gio-hang.php">Giỏ hàng</a></li> 
										<li><a href="login.html">Đăng Nhập</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin Tức</a>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Liên Hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm kiếm sản phẩm"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
