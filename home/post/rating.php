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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/style.css">

<style type="text/css">
        .mapouter{position:relative;text-align:right;height:100%;width:100%;}
        .gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}
        @import url(https://fonts.googleapis.com/css?family=Dosis:700);
        .controls label {
    display: inline-block;
    width: 90px;
    height: 20px;
    text-align: center;
    vertical-align: top;
    padding-top: 40px;
}
.controls input {
    display: block;
    margin: 0 auto -40px;
}
</style>
<script>
    function showVal(newVal){
        document.getElementById("valBox").innerHTML = newVal;
    }
</script>
</head>

<?php

    $id = $_SESSION['id_customer_view'];
    $id_bengkel = $_SESSION['review_bengkel'];
    date_default_timezone_set("Asia/Bangkok");
    $datetime = new DateTime('tomorrow');
    
    $time = $datetime->format('Y-m-d');
    $mysql_x = mysqli_query($con,"SELECT * FROM data_bengkel where id_account = $id_bengkel") ;
    $data_x = mysqli_fetch_array($mysql_x);

    $mysql_v = mysqli_query($con,"SELECT * FROM data_reservasi WHERE id_bengkel IN (SELECT id_account FROM data_bengkel) and status != 'expired' ");
    $data_v = mysqli_fetch_array($mysql_v);
    
?>
<body class="text-center search-banner">
<div id="input_email" class="container mx-auto align-middle" style="margin-top:-17vh;">
        <div class="login-form  mx-auto pt-3 pl-4 pr-4">
        <h2 style="margin-top:14vh !important;" class="text-light text-left">RATING <?php echo"$data_x[nama_bengkel]" ?></h2>
        
        </div>

        <div style="margin-top:1vh">
            <div class="form-group px-2" >
                <div class="col-12">
                        <h3 class="text-uppercase text-light text-left" style="margin-top:2vh;">PILIH RATING BENGKEL</h3>
                        <form action="../php/rating_engine.php" method="POST" enctype="multipart/form-data">
                         <div class="row">
                            <div class="col-12" style="margin-bottom:3vh;">
                            
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary " style="width:11vw;">
                                            <input type="radio" id="1" name="rating_value" autocomplete="off" value="1" > 
                                            <h2 class="text-light">1</h2>
                                    </label>

                                    <label class="btn btn-primary " style="width:11vw;">
                                            <input type="radio" id="2" name="rating_value" autocomplete="off" value="2"> 
                                            <h2 class="text-light">2</h2>
                                    </label>

                                    <label class="btn btn-primary " style="width:11vw;">
                                            <input type="radio" id="3" name="rating_value" autocomplete="off" value="3"> 
                                            <h2 class="text-light">3</h2>
                                    </label>

                                    <label class="btn btn-primary " style="width:11vw;">
                                            <input type="radio" id="4" name="rating_value"  autocomplete="off" value="4"> 
                                            <h2 class="text-light">4</h2>
                                    </label>

                                    <label class="btn btn-primary " style="width:11vw;">
                                            <input type="radio" id="5" name="rating_value" autocomplete="off" value="5"> 
                                            <h2 class="text-light">5</h2>
                                    </label>
                                </div>

                            </div>
                            <div class="col-12">
                                <h5 class=" text-light text-left">KOMENTAR ANDA</h5>
                                <textarea name="review" rows="4" class="form-control mb-2" cols="50" placeholder="Tulis komentar disini..."></textarea>
                            </div>
                        </div>
                            <button type="submit"  class="text-light  btn btn-primary  form-control mt-1">SELESAI</button>                         
                        </form>
                    </div>
            </div>
        </div>
    </form>
</div>
<body>