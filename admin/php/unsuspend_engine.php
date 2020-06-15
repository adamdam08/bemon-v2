<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql_x  = mysqli_query($con,"SELECT * FROM data_bengkel where id_account = $id");
    while($data_x = mysqli_fetch_array($sql_x)){
        if($data_x['id_account'] == $id){
            mysqli_query($con,"UPDATE account set level = '1' where id_account = $id");
            mysqli_query($con,"UPDATE data_bengkel set status = 'confirmed' where id_account = $id");
            header("location:../suspend_bengkel.php");
            exit();
        }
    }

    $sql_v = mysqli_query($con,"SELECT * FROM data_customer where id_account = $id");
    while($data_v = mysqli_fetch_array($sql_v)){
        if($data_v['id_account'] == $id){
            mysqli_query($con,"UPDATE account set level = '0' where id_account = $id");
            header("location:../suspend_customer.php");
            exit();
        }
    }
?>