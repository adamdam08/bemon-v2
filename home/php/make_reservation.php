<?php
    include 'koneksi.php';
	session_start();
	include_once 'session_engine_checker.php';
    $id_bengkel = $_SESSION['id_bengkel_view'];
    $id_customer = $_SESSION['id_customer_view'];
	$seri 	  	= $_POST['seri_kendaraan'];
	$nopol 	  	= $_POST['nopol'];
	$tanggal   	= $_POST['tanggal'];
    $jam 		= $_POST['jam'];
    $menit 		= $_POST['menit'];
    $jamfull    = "$jam : $menit";
	echo $jamfull;
	if($seri != null && $nopol != null && $tanggal != null && $jam != null && $menit != null){
		$account = mysqli_query($con,"INSERT INTO data_reservasi VALUES (' ','$id_bengkel','$id_customer','$seri','$nopol','$tanggal','$jamfull','Membuat Reservasi' )");
        if (!$account) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }elseif($account == true){
			header("location:../../home");
		}else{
			echo "<script>window.history.go(-1);</script>";
		}
	}else{
		header("location:../post/search_manual.php");
	}

?>