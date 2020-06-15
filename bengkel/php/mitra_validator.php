<?php
    include_once 'koneksi.php';
    $valid = false;

    if(isset($_SESSION['email'])){
      $email = $_SESSION['email'];
      $username ="";
      $data = mysqli_query($con, "SELECT * FROM data_customer WHERE email like '$email' ");
      if (!$data) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }
      while($exec = mysqli_fetch_array($data)){
        if($exec['email'] == $email){
          $username = $exec['nama'];
          $valid = true;
          break;
        }
      }
    }

    if($valid == true){
        include_once '../home/mitra_page-post.php';
    }else if($valid == false){
        include_once '../home/mitra_page-pre.php';
    }
?>