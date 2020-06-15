<!DOCTYPE html>
<html lang="en">
  <?php
    include_once 'php/koneksi.php';
  ?>
  <!-- bootstrap -->
    <?php include '../home/bootstrap.php';
      include 'navbar-post.php';
     ?>
  <!-- bootstrap END -->

  <!-- search Section -->
  <body class="text-center search-banner">
  <div class="container">
      <p class="text-uppercase text-light">RESERVASI BENGKEL BE-MON</p>
      <h1 class="text-light"> DATA RESERVASI</h1>
      <table class="table table-hover bg-light rounded">
        <thead>
          <tr>
            <th>Id_user</th>
            <th>Waktu</th>
            <th>Plat Kendaraan</th>
            <th>Id Booking</th>
            <th>Pengerjaan</th></tr>
        </thead>
        <?php
        include 'php/koneksi.php';
        $no = 1;
        $data = mysqli_query($con, "Select * from data_pesanan");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['waktu']?></td>
          <td><?php echo $d['flat_kendaraan']; ?></td>
          <td><?php echo $d['id_booking']; ?></td>
          <td><?php echo $d['status']; ?></td>
        </tr>
        <?php
      }
      ?>
      </table>
      <!--================ Service section start =================-->
    </div>
  </body>
  <!-- search End -->
   
  <!-- javascript -->
    <?php include '../home/javascript.php' ?>
  <!-- javascript END -->

</body>
</html>