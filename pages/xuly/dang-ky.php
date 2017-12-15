<?php 
	include('../../inc/ketnoi.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$hoten = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['hoten_dn']));
		$email = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['email_dn']));
		$matkhau = md5($_POST['matkhau_dn']);
		$dienthoai = $_POST['dienthoai'];
		$ngaysinh = $_POST['ngaysinh'];
		$gioitinh = $_POST['gioitinh'];

		$dangky = "INSERT INTO thanh_vien VALUES('', '".$hoten."', '".$email."', '".$matkhau."', '".$dienthoai."', '".$ngaysinh."', '".$gioitinh."', '1')";
		$qr_dangky = mysqli_query($ketnoi, $dangky);

		if($qr_dangky) {
			echo "<script>alert('Đăng ký thành công!!!')</script>";
			echo "<script> window.location='../tai-khoan.php'</script>";
		} else {
			echo "<script>alert('Có lỗi, Vui lòng kiểm tra lại .')</script>";
		}
 	}

 ?>