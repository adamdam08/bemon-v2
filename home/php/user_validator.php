<?php
    include_once 'koneksi.php';
    session_start();
    $valid = false;

    if(isset($_SESSION['customer'])){
      $email = $_SESSION['customer'];
      $username ="";
      $data = mysqli_query($con, "SELECT * FROM account WHERE email like '$email' and level = 0 ");
      if (!$data) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }

      while($exec = mysqli_fetch_array($data)){
        if($exec['email'] == $email){
          $extract = mysqli_query($con, "SELECT * FROM data_customer WHERE id_account like $exec[id_account]");
          while($extract_list = mysqli_fetch_array($extract)){
            if($extract_list["id_account"] == $exec["id_account"]){
              $username = $extract_list['nama'];
              $_SESSION['id_customer_view'] = $extract_list['id_account'];
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
      // tanggal
      date_default_timezone_set("Asia/Jakarta");
      $datetime = new DateTime('tomorrow');
      $now = $datetime->format('Y-m-d');
      $mysql_x = mysqli_query($con,"SELECT * FROM data_reservasi where id_customer = $_SESSION[id_customer_view] ");
      while($data_x = mysqli_fetch_array($mysql_x)){
        $curdate = strtotime($now);
        $mydate = strtotime($data_x['tanggal']);
        if($mydate < $curdate){
            mysqli_query($con, "UPDATE data_reservasi SET status = 'expired' WHERE id_reservasi = $data_x[id_reservasi]");
        }
      }

      $sql = mysqli_query($con, "SELECT * FROM data_reservasi where tanggal = '$now' and status != 'expired'");
      while($data_x = mysqli_fetch_array($sql)){
        if($_SESSION['id_customer_view'] == $data_x['id_customer']){
          header("location:../home/post/view_reservation.php");    
        }
      }
      include_once '../home/post/navbar-post.php';
      include_once '../home/post/banner-post.php';

    }else if($valid == false){
      include_once '../home/pre/navbar-pre.php';
      include_once '../home/pre/banner-pre.php';
      include_once '../home/pre/tutorial_page.php';
      include_once '../home/pre/layanan_page.php';
      include_once '../home/pre/mitra_page.php';
      include_once '../home/pre/footer.php';
    }else{
      header("location:../index.php");
    }
?>