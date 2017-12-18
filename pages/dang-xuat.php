<?php 
	session_start();
	if(!isset($_SESSION['login'])) {
		echo "<script> window.location='../index.php'</script>";
		die;
	} else {
		if(isset($_GET['dx'])) {
			unset($_SESSION['login']);
			echo "<script> window.location='../index.php'</script>";
		}
	}

 ?>