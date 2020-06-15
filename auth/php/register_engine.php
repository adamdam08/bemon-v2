<?php

include 'koneksi.php';

session_start();
$kode = $_SESSION['kode_register'];

if($kode == "0"){
	$nama 	  	= $_POST['nama'];
	$email 	  	= $_POST['email'];
	$telepon   	= $_POST['telepon'];
	$pass 		= md5($_POST['sandi']);
	$filename   = $_FILES['image']['name'];
	
	if($nama != null && $email != null && $telepon != null && $pass != null && $filename != null){
		$temp = explode(".", $filename);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["image"]["tmp_name"], "kitas/" . $newfilename);

		$account = mysqli_query($con,"INSERT INTO account VALUES (' ','$email','$pass','0')");
		
		if($account == true){
			$_SESSION['customer']= $email;
			$email_temp = $_SESSION['customer'];
			$id_temp;
			$ex_id = mysqli_query($con,"select * from account where level like 0 ");
			while($data_s = mysqli_fetch_array($ex_id)){
				if($data_s['email'] == $email_temp){
					$id_temp = $data_s['id_account'];
					break;
				} 
			} 

			$data = mysqli_query($con,"INSERT INTO data_customer VALUES ('$id_temp','$nama','$telepon','$newfilename')");
			header("location:../../home");
		}else{
			echo "<script>window.history.go(-1);</script>";
		}
	}else{
		header("location:../auth");
	}
}else if($kode == "1"){
	$nama 	  	= $_POST['nama'];
	$bengkel 	= $_POST['bengkel'];
	$email 	  	= $_POST['email'];
	$telepon   	= $_POST['telepon'];
	$kitas   	= $_FILES['kitas']['name'];
	$surha   	= $_FILES['surha']['name'];
	$kapasitas 	= $_POST['kapasitas'];
	$koordinat 	= $_POST['koordinat'];
	$pass 		= md5($_POST['sandi']);
	$alamat		= $_POST['alamat'];

	if($nama != null && $bengkel != null && $email != null && $telepon != null && $kitas != null && $surha != null && $kapasitas != null && $koordinat != null && $alamat != null){
		
		$tempkitas = explode(".", $kitas);
		$newkitas = round(microtime(true)) . '.' . end($tempkitas);
		move_uploaded_file($_FILES["kitas"]["tmp_name"], "kitas_owner/" . $newkitas);
		
		$tempsurha = explode(".", $surha);
		$newsurha = round(microtime(true)) . '.' . end($tempsurha);
		move_uploaded_file($_FILES["surha"]["tmp_name"], "surat_usaha/" . $newsurha);
		
		$account = mysqli_query($con,"INSERT INTO account VALUES (' ','$email','$pass','1')");
		
		if (!$account) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

		if($account == true){
			$_SESSION['bengkel']= $email;
			$email_temp = $_SESSION['bengkel'];
			$id_temp;
			$ex_id = mysqli_query($con,"select * from account where level like 1");
			while($data_s = mysqli_fetch_array($ex_id)){
				if($data_s['email'] == $email_temp){
					$id_temp = $data_s['id_account'];
					break;
				} 
			} 

			$data = mysqli_query($con,"INSERT INTO data_bengkel VALUES ('$id_temp','$nama','$bengkel','$telepon','$newkitas','$newsurha','$kapasitas','$koordinat','unconfirmed','$alamat')");
			
			if (!$data) {
				printf("Error: %s\n", mysqli_error($con));
				exit();
			}else if($data == true){
				header("location:../../bengkel");
			}else{
				var_dump($nama);
				var_dump($bengkel);
				var_dump($email);
				var_dump($telepon);
				var_dump($kitas);
				var_dump($surha);
				var_dump($kapasitas);
				var_dump($koordinat);
				var_dump($k_sandi);
				var_dump($alamat);
			}
		}else{
			echo "<script>window.history.go(-1);</script>";
		}
	}else{
		header("location:../../auth");
	}
}

?>