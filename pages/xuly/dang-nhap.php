<?php 
	session_start();
	include('../../inc/ketnoi.php');
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$email = $_POST['email'];
		$matkhau = md5($_POST['matkhau']);

		$kiemtra_DN = "SELECT * FROM thanh_vien WHERE Email='".$email."' AND MatKhau='".$matkhau."'";
		$qr_dangnhap = mysqli_query($ketnoi, $kiemtra_DN);

		if(mysqli_num_rows($qr_dangnhap) == 1 ) {
			$_SESSION['login'] = $email;
			echo "<script>alert('Đăng Nhập thành công!!!')</script>";
			echo "<script> window.location='../../index.php'</script>";
		} else {
			echo "<script>alert('Vui lòng nhập vào tên đăng nhập và mật khẩu .')</script>";
			echo "<script> window.location='../../pages/tai-khoan.php'</script>";
		}

		// echo $email ." ".$matkhau;
	}

 ?>