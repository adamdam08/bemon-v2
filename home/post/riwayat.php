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
      <h4 class="text-light float-left">Riwayat Reservasi </h4>
      <a href="../../home" class="float-right btn btn-link text-light mb-2">Kembali ke Beranda</a>
    </div>
    
    <!-- Actual search box -->
    <div class="form-group has-search">
        <span class="ti-search form-control-feedback"></span>
        <input id="box-search" type="text"  onkeyup="liveSearch()" class="form-control" placeholder="Kata Kunci Pencarian">
    </div>

    <table id="search-data" class="table table-hover bg-light rounded" valign="center">
  <thead>
    <tr >
      <th scope="col p-3">ID Reservasi</th>
      <th scope="col p-3">Nama Bengkel</th>
      <th scope="col p-3">Kendaraan</th>
      <th scope="col p-3">Waktu</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $id = $_SESSION['id_customer_view'];
      $mysql = mysqli_query($con,"SELECT * FROM data_reservasi where id_customer = $id");
      while($data = mysqli_fetch_array($mysql)){
      $mysqlx = mysqli_query($con,"SELECT * FROM data_bengkel where id_account = $data[id_bengkel]");
      $mysqlx_exe = mysqli_fetch_array($mysqlx);
    ?>
    <tr class="listSearchx">
      <td><?php echo"$data[id_reservasi]"?></td>
      <td><?php echo"$mysqlx_exe[nama_bengkel]"?></td>
      <td><?php echo"$data[seri_kendaraan]"?></td>
      <td><?php echo"$data[tanggal] ($data[jam])"?></td>

    </tr>
      <?php } ?>
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
    td1 = tr[i].getElementsByTagName("td")[1];
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