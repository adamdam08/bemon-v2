<?php
session_start();
include_once 'session_engine_checker.php';
include_once("koneksi.php");

$id			= $_SESSION['id_customer_view'];
$sandi_u  	= md5($_POST['sandi_awal']);
$sandi_k    = md5($_POST['sandi_konfirmasi']);

if(($sandi_u != null && $sandi_k != null) || ($sandi_k == $sandi_u)){
	mysqli_query($con, "UPDATE account SET kata_sandi = '$sandi_u'where id_account = $id ");
	header("location: ../post/edit_akun.php?page=e_sandi");
}else{
	header("location: ../post/edit_akun.php?page=e_sandi");
}
?>
