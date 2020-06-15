<?php
session_start();
include_once 'session_engine_checker.php';
include_once("koneksi.php");

$id			= $_SESSION['id_customer_view'];
$nama 		= $_POST['nama'];
$telepon 	= $_POST['telepon'];

if($id != null && $nama != null && $telepon != null){
	mysqli_query($con, "UPDATE data_customer SET nama = '$nama', telepon ='$telepon' where id_account = $id ");
	header("location: ../post/edit_akun.php?page=e_data");
}else{
	header("location: ../post/edit_akun.php?page=e_data");
}
?>
