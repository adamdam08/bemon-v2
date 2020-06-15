<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include_once '../php/session_checker.php';
    $_SESSION['id_bengkel_view'] = $_GET['id'];
    include_once '../php/koneksi.php';
    isset($_GET["page"])?$step=$_GET["page"]:$step="";
    if($step == "" && $step == "v_data"){
        $_SESSION['nav-active']="v_data";
        
    }else if($step == "v_review"){
        $_SESSION['nav-active']="v_review";
        
    }else{
        $_SESSION['nav-active']="v_data";
        
    }
    $id = $_GET['id'];
    $mysql = mysqli_query($con,"SELECT * FROM data_bengkel where id_account = $id");
    $data = mysqli_fetch_array($mysql);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BE-MON (Bengkel Motor Online)</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="../../vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/style.css">

    <style type="text/css">
        .mapouter{position:relative;text-align:right;height:100%;width:100%;}
        .gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}
    </style>
</head>

<body class="text-center search-banner">
<div id="input_email" class="container mx-auto align-middle" style="margin-top:-20vh;">
        <div class="login-form  mx-auto pt-3 pb-3 pl-4 pr-4">
        <h2 style="margin-top:14vh !important;" class="text-light text-left">Tamplikan Data <?php echo"$data[nama_bengkel]" ?></h2>
        
        <div>
            <div class="row">
                <div class="col-6">
                <a href="view_data.php?page=v_data&id=<?php echo $data['id_account']?>" class="btn form-control
                <?php  if($_SESSION['nav-active'] == "v_data"){ ?>
                    btn-primary
                <?php }else { ?>
                    btn-outline-primary
                <?php } ?>
                " >Data</a>
                </div>
                <div class="col-6">
                <a href="view_data.php?page=v_review&id=<?php echo $data['id_account']?>" class="btn form-control 
                <?php  if($_SESSION['nav-active'] == "v_review"){ ?>
                    btn-primary
                <?php }else { ?>
                    btn-outline-primary
                <?php } ?>
                ">Review</a>
                </div>
            </div>
        </div>

        <?php
            isset($_GET["page"])?$step=$_GET["page"]:$step="";
            if($step == "" && $step == "v_data"){
                $_SESSION['nav-active']="v_data";
                include 'view_data_bengkel.php';
            
            }else if($step == "v_review"){
                $_SESSION['nav-active']="v_review";
                include 'view_rating_bengkel.php';
                
            }else{
                $_SESSION['nav-active']="v_data";
                include 'view_data_bengkel.php';
                
            }
        ?>
    
</div>
<body>