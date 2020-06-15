<?php
    include_once 'koneksi.php';
    session_start();
    $valid = false;

    if(isset($_SESSION['bengkel'])){
      $email = $_SESSION['bengkel'];
      $username ="";
      $data = mysqli_query($con, "SELECT * FROM account WHERE email like '$email' and level = 1 ");
      if (!$data) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }

      while($exec = mysqli_fetch_array($data)){
        if($exec['email'] == $email){
          $extract = mysqli_query($con, "SELECT * FROM data_bengkel WHERE id_account like $exec[id_account]");
          while($extract_list = mysqli_fetch_array($extract)){
            if($extract_list["id_account"] == $exec["id_account"]){
              $username = $extract_list['nama_bengkel'];
              $_SESSION['id_bengkel_view_log'] = $extract_list['id_account'];
              break;
            }
            break;
          }
          $valid = true;
          break;
        }
      }
    }

    isset($_GET["page"])?$step=$_GET["page"]:$step="";

    if($valid == true){
      if($extract_list["status"] == "unconfirmed"){
        include_once '../bengkel/post/navbar-unconfirmed.php';
        include_once '../bengkel/post/banner-unconfirmed.php';
      }else{
        include_once '../bengkel/post/navbar-post.php';
        include_once '../bengkel/post/banner-post.php';
      }
    }else if($valid == false){
      include_once '../bengkel/pre/navbar-pre.php';
      include_once '../bengkel/pre/banner-pre.php';
      include_once '../bengkel/pre/keuntungan_page.php';
      include_once '../bengkel/pre/mitra_page.php';
      include_once '../bengkel/pre/footer.php';
    }else{
      header("location:../index.php");
    }
?>