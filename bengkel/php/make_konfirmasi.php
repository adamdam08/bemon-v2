<?php
    include 'koneksi.php';
    
    session_start();
    $id_reservasi = $_GET['id'];
	if($id_reservasi != null){
		$account = mysqli_query($con,"UPDATE data_reservasi set status = 'Pengerjaan' where id_reservasi = $id_reservasi");
        if (!$account) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }elseif($account == true){
			header("location:../post/reservasi_page.php");
		}else{
			// echo "<script>window.history.go(-1);</script>";
		}
	}else{
		header("location:../post/reservasi_page.php");
	}

?>