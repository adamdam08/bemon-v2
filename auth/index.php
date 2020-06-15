<!DOCTYPE html>
<html lang="en">
  <?php
    include_once 'php/koneksi.php';
  ?>
  <!-- bootstrap -->
    <?php include '../home/bootstrap.php' ?>
  <!-- bootstrap END -->

  <!-- Koneksi MYSQLi -->
    <?php include '../auth/php/koneksi.php' ?>
  <!-- Koneksi MYSQLi end-->

  <!-- Login Section -->
  <body class="text-center login-banner">
    <?php
        session_start();
        include "../auth/php/koneksi.php";
        isset($_GET["page"])?$step=$_GET["page"]:$step="";
        if($step == ""){
            include 'login.php';
        }else if($step == "r_customer"){
            include 'register_customer.php';
        }else if($step == "r_bengkel"){
          include 'register_bengkel.php';
        }
        
        else{
          header("location:../home");
        }
    ?>
  </body>
  <!-- Login Section End -->
   
  <!-- javascript -->
    <?php include '../home/javascript.php' ?>
  <!-- javascript END -->

</body>
</html>