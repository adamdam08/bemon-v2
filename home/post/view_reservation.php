<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include_once '../php/session_checker.php';
    include_once '../php/koneksi.php';
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
        @import url(https://fonts.googleapis.com/css?family=Dosis:700);
</style>
<script>
    function showVal(newVal){
        document.getElementById("valBox").innerHTML = newVal;
    }
</script>
</head>

<?php

    $id = $_SESSION['id_customer_view'];
    date_default_timezone_set("Asia/Bangkok");
    $datetime = new DateTime('tomorrow');
    
    $time = $datetime->format('Y-m-d');
    $mysql_x = mysqli_query($con,"SELECT * FROM data_bengkel where id_account IN (SELECT id_bengkel FROM data_reservasi WHERE id_customer = $id)") ;
    $data_x = mysqli_fetch_array($mysql_x);

    $mysql_v = mysqli_query($con,"SELECT * FROM data_reservasi WHERE id_bengkel IN (SELECT id_account FROM data_bengkel) and status != 'expired' ");
    $data_v = mysqli_fetch_array($mysql_v);

    if($data_v['status'] == "Rating Bengkel") {
        $_SESSION['review_bengkel'] = $data_v['id_bengkel'];
        $_SESSION['id_reservasi'] = $data_v['id_reservasi'];
        header("location:rating.php");
    }

    
?>
<body class="text-center search-banner">
<div id="input_email" class="container mx-auto align-middle" style="margin-top:-23vh;">
        <div class="login-form  mx-auto pt-3 pl-4 pr-4">
        <h2 style="margin-top:14vh !important;" class="text-light text-left">Data Reservasi Bengkel Anda</h2>
        <h6 class="text-light text-left text-uppercase" style="margin-top:1vh;margin-bottom:1vh;">STATUS RESERVASI : <?php echo $data_v['status'] ?></h6>
            <form action="../php/make_reservation.php" method="POST" enctype="multipart/form-data">
                <div>
                    <p class="text-light text-left"><b>LOKASI BENGKEL <?php echo"$data_x[nama_bengkel]" ?></b></p>
                    <iframe width="100%" height="250px" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo"$data_x[koordinat]" ?>&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div class="mb-1" >
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-location-pin" id="basic-addon1"></span>
                                </div>
                                <input readonly type="text" value="Bengkel <?php echo"$data_x[nama_bengkel]" ?>"  class="form-control" placeholder="Seri Kendaraan Anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-file" id="basic-addon1"></span>
                                </div>
                                <input readonly type="text" value="<?php echo"$data_v[seri_kendaraan]" ?>"  class="form-control" placeholder="Seri Kendaraan Anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-file" id="basic-addon1"></span>
                                </div>
                                <input readonly type="text" name="nopol" value="<?php echo"$data_v[nopol]" ?>" class="form-control" placeholder="No. POLISI" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-calendar" id="basic-addon1"></span>
                                </div>
                                <input readonly type="text" name="seri_kendaraan" value="<?php echo"$data_v[tanggal]" ?>" class="form-control" placeholder="Seri Kendaraan Anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-alarm-clock" id="basic-addon1"></span>
                                </div>
                                <input readonly type="text" name="seri_kendaraan" value="<?php echo"$data_v[jam]" ?>" class="form-control" placeholder="Seri Kendaraan Anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div> 
                </div>               
        </div>

        <div style="margin-top:1vh">
            <div class="form-group px-2" >
                <div class="col-12">
                    <a href=""  class="disabled text-light  btn btn-primary  form-control">Beri Rating</a>
                </div>
            </div>
        </div>
    </form>
</div>
<body>