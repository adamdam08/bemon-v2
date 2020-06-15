<?php
    include 'koneksi.php';
    $id = $_POST[key_id];
    $sql = mysqli_query($con,"UPDATE data_bengkel set status = 'confirmed' where id_account = $id");
    if($sql == true){
        header("location:../index.php");
    }else{
        echo"<script>window.history.go(-1)</script>";
    }
?>