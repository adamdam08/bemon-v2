<!DOCTYPE html>
<html lang="en">

  <?php
    session_start();
    include_once '../php/koneksi.php';
    include_once '../php/session_checker.php';
    $id = $_SESSION['id_bengkel_view_log'];
    date_default_timezone_set("Asia/Bangkok");
    $datetime = new DateTime('tomorrow');
    $now = $datetime->format('Y-m-d');
    $curdate = strtotime($now);
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
</head>

  <!-- search Section -->
  <body class="text-center search-banner">
  <div class="container ">
    <div class="clearfix">
      <h4 class="text-light ">Permintaan Reservasi</h4>
    </div>
    <div class="clearfix" style="clear: both;">
      <h6 class="float-left text-light">Untuk tanggal <?php echo $now ?> </h6>
      <a href="../../bengkel" class="float-right btn btn-link"><h6 class="text-light">Kembali ke Beranda</h6></a>
    </div>

    <table class="table table-hover bg-light rounded table-responsive-md" valign="center">
  <thead>
    <tr>
      <th scope="col p-3">ID</th>
      <th scope="col p-3">Seri Kendaraan</th>
      <th scope="col p-3">NOPOL</th>
      <th scope="col p-3">Waktu</th>
      <th scope="col p-3">Status Reservasi</th>
      <th scope="col p-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
      //Tampilkan Request 
      $mysql = mysqli_query($con,"SELECT * FROM data_reservasi where id_bengkel = '$id' and DATE(tanggal) = CURDATE()+1 ");
      if (!$mysql) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
      while($data = mysqli_fetch_array($mysql)){
    ?>
    <tr>
    <td><?php echo"$data[id_reservasi]"?></td>
      <td><?php echo"$data[seri_kendaraan]"?></td>
      <td><?php echo"$data[nopol]"?></td>
      <td><?php echo"$data[tanggal] ($data[jam])"?></td>
      <td><?php echo"$data[status]"?></td>
      <td>
        <?php 
          if($data['status'] == "Membuat Reservasi"){ ?>
            <a href="../php/make_konfirmasi.php?id=<?php echo"$data[id_reservasi]"?>" class="btn btn-primary btn-block" >Konfirmasi Reservasi</a>
          <?php }else if($data['status'] == "Pengerjaan") { ?>
            <a href="../php/make_finish.php?id=<?php echo"$data[id_reservasi]"?>" class="btn btn-primary btn-block" >Pekerjaan Selesai</a>  
          <?php }else { ?>
            <a class="btn btn-disabled btn-primary text-light btn-block" >Pengerjaan Selesai</a>
          <?php } ?>
        
      </td>

    </tr>
      <?php } ?>
  </tbody>
</table>

<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="../../js/jquery.ajaxchimp.min.js"></script><script src="../js/mail-script.js"></script>
<script src="../../js/main.js"></script>

</body>
</html>