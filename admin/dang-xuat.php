<?php 
	session_start();
	if(isset($_GET['dx'])) {
		unset($_SESSION['quantri']);
		session_destroy();
		echo $_SESSION['quantri'];
	} else {
		echo "<script>alert('lỗi')</script>";
	}

 ?>
 <script> window.location='dang-nhap/dang-nhap.php'</script>