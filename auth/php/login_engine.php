<?php
include_once 'koneksi.php';

session_start();

$email	=	$_POST['email']; 
$password	= md5($_POST['sandi']); 

if($email != null && $password != null){
	$query	=	mysqli_query($con ,"SELECT * FROM account where email='$email' and kata_sandi='$password'"); 
	$cek	=	mysqli_num_rows($query);
	if (!$cek) {
		echo "<script>alert('Email atau Kata sandi salah');</script>";
		// printf("Error: %s\n", mysqli_error($con));
		// exit();
		echo "<script>window.history.go(-1);</script>";
	}else if($cek){
		while($data = mysqli_fetch_array($query)){
			if($data['level'] == 0){
				$_SESSION['customer']= $email;
				header("location:../../home");
			}else if($data['level'] == 1){
				$_SESSION['bengkel']= $email;
				header("location:../../bengkel");
			}else if($data['level'] == 2){
				$_SESSION['admin']= $email;
				header("location:../../admin");
			}
		}
		
	}else{
		header("location../auth");
	}
	
}else{
	header("location:../../home");
}
?>