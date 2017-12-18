<?php 
	include('../../inc/ketnoi.php');
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$xoadm = "DELETE FROM danh_muc WHERE id='".$id."'";
		$qr_xoadm = mysqli_query($ketnoi, $xoadm);
		if($qr_xoadm) {
			echo "<script>alert('Xóa Danh Mục Sản Phẩm Thành Công!')</script>";
			echo "<script> window.location='../danh-muc-sp.php' </script>";
		}
	}
 ?>