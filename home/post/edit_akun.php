<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
    include_once '../php/session_checker.php';
    include_once '../php/koneksi.php';
    $extract_x = mysqli_query($con, "SELECT * FROM data_customer WHERE id_account like $_SESSION[id_customer_view]");
    $data_x = (mysqli_fetch_array($extract_x));

    $extract_v = mysqli_query($con, "SELECT * FROM account WHERE id_account like $_SESSION[id_customer_view]");
    $data_v = (mysqli_fetch_array($extract_v));

    isset($_GET["page"])?$step=$_GET["page"]:$step="";
    if($step == "" && $step == "e_data"){
        $_SESSION['nav-active']="e_data";
        
    }else if($step == "e_sandi"){
        $_SESSION['nav-active']="e_sandi";
        
    }else{
        $_SESSION['nav-active']="e_data";
        
    }
  ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BE-MON (Bengkel Motor Online)</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<!-- Login Section -->
<body class="text-center login-banner">
  <div id="input_email" class="container mx-auto align-middle" style="margin-top:-20vh;">
        <div class="login-form  mx-auto pt-3 pb-3 pl-4 pr-4">
            
        <div style="margin-top:2vh !important;" class="clearfix">
            <img width=125 class="float-left mb-3" src="../../img/bemon-logo.png"/>
            <h3 class="text-light text-right float-right ">PERBARUI DATA </h3>
        </div>

        <div>
            <div class="row">
                <div class="col-6">
                <a href="edit_akun.php?page=e_data" class="btn form-control
                <?php  if($_SESSION['nav-active'] == "e_data"){ ?>
                    btn-primary
                <?php }else { ?>
                    btn-outline-primary
                <?php } ?>
                " >Data</a>
                </div>
                <div class="col-6">
                <a href="edit_akun.php?page=e_sandi" class="btn form-control 
                <?php  if($_SESSION['nav-active'] == "e_sandi"){ ?>
                    btn-primary
                <?php }else { ?>
                    btn-outline-primary
                <?php } ?>
                ">Sandi</a>
                </div>
            </div>
        </div>

<!DOCTYPE html>
<html lang="en">

  <!-- Login Section -->
  <body class="text-center login-banner">
    <?php
        isset($_GET["page"])?$step=$_GET["page"]:$step="";
        if($step == "" && $step == "e_data"){
            $_SESSION['nav-active']="e_data";
            include 'edit_data_akun.php';
           
        }else if($step == "e_sandi"){
            $_SESSION['nav-active']="e_sandi";
            include 'edit_sandi_akun.php';
            
        }else{
            $_SESSION['nav-active']="e_data";
            include 'edit_data_akun.php';
            
        }
    ?>
  </body>
  <!-- Login Section End -->
   
  <!-- javascript -->
    <?php include '../../bengkel/javascript.php' ?>
  <!-- javascript END -->

</body>
</html>

    </div>
</body>
<!-- Login Section End -->

<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="../../js/jquery.ajaxchimp.min.js"></script><script src="../js/mail-script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>

</body>
</html>