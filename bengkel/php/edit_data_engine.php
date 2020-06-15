<?php
session_start();
include_once("koneksi.php");

$id			= $_SESSION['id_bengkel_view_log'];
$koordinat 	= $_POST['koordinat'];
$nama 		= $_POST['nama'];
$bengkel 	= $_POST['bengkel'];
$telepon 	= $_POST['telepon'];
$kapasitas 	= $_POST['kapasitas'];
$alamat		= $_POST['alamat'];

if($koordinat != null && $nama != null && $bengkel != null  && $kapasitas != null){
	mysqli_query($con, "UPDATE data_bengkel SET nama_pemilik = '$nama', nama_bengkel='$bengkel',telepon = '$telepon',kapasitas = '$kapasitas',koordinat = '$koordinat',alamat = '$alamat' where id_account = $id ");
	header("location: ../post/edit_akun.php?page=e_data");
}else{
	header("location: ../post/edit_akun.php?page=e_data");
}
?>
