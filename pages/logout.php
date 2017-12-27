<?php 
	session_start();
	include('../inc/ketnoi.php');

	if(isset($_GET['dx'])) {
		unset($_SESSION['user']);
		echo "<script> window.location='/index.php'</script>";
	}
 ?>