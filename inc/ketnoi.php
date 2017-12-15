<?php 
	$ketnoi = mysqli_connect("localhost", "root", "", "store_db");

	//kiểm tra kết nối
	if (mysqli_connect_errno()) {
		echo "Kết nối CSDL không thành công: ". mysqli_connect_error();
	}

	//set utf8 
	mysqli_set_charset($ketnoi, "utf8");

?>