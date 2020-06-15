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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


</head>
  <!-- search Section -->
  <body class="text-center search-banner">
  <div class="container ">
    <div class="clearfix">
      <h4 class="text-light float-left">PENCARIAN BENGKEL </h4>
      <a href="../../home" class="float-right btn btn-link text-light mb-2">Kembali ke Beranda</a>
    </div>
    
    <!-- Actual search box -->
    <div class="form-group has-search">
        <span class="ti-search form-control-feedback"></span>
        <input id="box-search" type="text" class="form-control" onkeyup="liveSearch()" placeholder="Kata Kunci Pencarian : Nama Bengkel">
    </div>

  <table id="search-data" class="table table-hover bg-light rounded" valign="center">
  <thead>
    <tr>
      <th scope="col p-3">Nama Bengkel</th>
      <th scope="col p-3">Alamat</th>
      <th scope="col p-3">Telepon</th>
      <th scope="col p-3">Rating</th>
      <th scope="col p-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $mysql = mysqli_query($con,"SELECT * FROM data_bengkel where status = 'confirmed'");
      while($data = mysqli_fetch_array($mysql)){
      date_default_timezone_set("Asia/Bangkok");
      $cek_customer = mysqli_query($con,"SELECT COUNT(id_reservasi) AS hitung_customer FROM data_reservasi where id_bengkel = $data[id_account] and tanggal = CURDATE()+1 ");
      $cek_exec     = mysqli_fetch_array($cek_customer);
      
      $sum_rating = mysqli_query($con,"SELECT SUM(rating) AS totalrating FROM review_bengkel where id_bengkel = $data[id_account];");
      $sum_rating_exe = mysqli_fetch_array($sum_rating);
      
      $count_user = mysqli_query($con,"SELECT * FROM review_bengkel where id_bengkel = $data[id_account];");
      $count_user_exe = mysqli_num_rows($count_user);
      
      if($sum_rating_exe > 0 && $count_user_exe > 0 || $sum_rating_exe != null && $count_user_exe != null){
        $rating = floor($sum_rating_exe['totalrating'] / $count_user_exe);
        mysqli_free_result($count_user);
      }else{
        $rating = 5;
      }
    
      if($cek_exec['hitung_customer'] < $data['kapasitas'] ){
    ?>
    <tr class="listSearchx">
      <td><?php echo"$data[nama_bengkel]"?></td>
      <td><?php echo"$data[alamat]"?></td>
      <td><?php echo"$data[telepon]"?></td>
      <td><?php echo $rating ?>/5</td>
      <td >
        <a href="view_data.php?id=<?php echo"$data[id_account]"?>" class="form-control btn btn-primary">
          Lihat
        </a>
      </td>

    </tr>
      <?php 
          } 
        }
      ?>
  </tbody>
</table>

<script>
function liveSearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("box-search");
  filter = input.value.toUpperCase();
  table = document.getElementById("search-data");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[0];
    if (td1) {
      txtValue = td1.textContent || td1.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="../../js/jquery.ajaxchimp.min.js"></script><script src="../js/mail-script.js"></script>
<script src="../../js/main.js"></script>

</body>
</html>