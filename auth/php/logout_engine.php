<?php 
session_start();
$code = $_SESSION['kode_logout'];
if($code == 0){
    unset($_SESSION['customer']);
    unset($_SESSION['kode_logout']);
    header("location:../../home");
}else if($code == 1){
    unset($_SESSION['bengkel']);
    unset($_SESSION['kode_logout']);
    header("location:../../bengkel");
}else if($code == 2){
    unset($_SESSION['admin']);
    unset($_SESSION['kode_logout']);
    header("location:../../auth");

}




?>