<?php 
	include('../inc/Ketnoi.php');

	if($_GET['id_dm']) {
		$id_dm = $_GET['id_dm'];
	}
	$xoadm = "DELETE FROM loai_sp WHERE MaLoai_SP='".$id_dm."'";
	$qr_xoadm = mysqli_query($ketnoi, $xoadm);

	if($qr_xoadm) {
		echo "<script>alert('Xóa Danh Mục Thành Công!')</script>";
		echo "<script> window.location='danh-muc-sp.php'</script>";
	} else {
		echo "<script>alert('Đã xảy ra lỗi vui lòng kiểm tra lại !')</script>";
	}
 ?>