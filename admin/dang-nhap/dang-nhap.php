<?php 
	session_start();
	include('../../inc/ketnoi.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập vào hệ thống</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->
</head>
<!-- //Head -->
<!-- Body -->
<body>
	<h1>NN Shop</h1>
	<div class="w3layoutscontaineragileits">
	<h2>Đăng Nhập</h2>
		<form action="" method="post">
			<input type="text" Name="Username" placeholder="Tên Đăng Nhập" required="">
			<input type="password" Name="Password" placeholder="Mật Khẩu" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
					<a href="#">Quên mật khẩu?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="Đăng Nhập">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box-js-file -->  
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$tendangnhap = $_POST['Username'];
		$matkhau = md5($_POST['Password']);

		$KT_TaiKhoan = "SELECT * FROM nhan_vien WHERE TenDangNhap='".$tendangnhap."' AND MatKhau='".$matkhau."'";
		$truyvan_KT_taikhoan = mysqli_query($ketnoi, $KT_TaiKhoan);

		if(mysqli_num_rows($truyvan_KT_taikhoan) > 0) {
			$_SESSION['quantri'] = $tendangnhap;
			echo "<script> window.location='../index.php'</script>";
		} else {
			echo "lỗi";
		}
	}
 ?>