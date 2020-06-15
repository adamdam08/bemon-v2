<?php
    include 'koneksi.php';
	session_start();
	include_once 'session_engine_checker.php';
	$id_reservasi = $_SESSION['id_reservasi'];
	$id_customer = $_SESSION['id_customer_view'];
	$id_bengkel = $_SESSION['review_bengkel'];
	$rating 	  	= $_POST['rating_value'];
	$review 	  	= $_POST['review'];
	if($id_customer != null && $id_bengkel != null && $rating != null && $review != null){
		$review_exe = mysqli_query($con,"INSERT INTO review_bengkel VALUES (' ','$id_bengkel','$rating','$review' )");
		$account = mysqli_query($con,"UPDATE data_reservasi set status = 'expired' where id_reservasi = $id_reservasi");
		if (!$account && $review_exe) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }elseif($account == true && $review_exe == true){
			header("location:../../home");
		}else{
			echo "<script>window.history.go(-1);</script>";
		}
	}else{
		header("location:../index.php");
	}

?>