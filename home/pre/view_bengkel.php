<!DOCTYPE html>
<html lang="en">
  <?php
    include_once 'php/koneksi.php';
  ?>
  <!-- bootstrap -->
    <?php include '../home/bootstrap.php' ?>
  <!-- bootstrap END -->

  <!-- search Section -->
  <body class="text-center search-banner">
    <div class="container">
        <div class="col-12">
            <h1 class="text-light" style="margin-top:-10vh;">INFO BENGKEL </h1>
            <a href="../home/search_manual.php" class="btn btn-link text-light mb-2">Kembali ke Pencarian</a>
        </div>
        <div class="col-12">
            <img src="../img/banner/home-banner.jpg"  height="500" width="800" />
        </div>
        <a href="../home/view_bengkel.php" class="col-12 row result-card">
        <div class="col-9">
                <p class="text-light text-left">Buka : 09:00 - 23:00</p>
                <h2 class="text-light text-left" style="margin-top:-1vh !important">AHASS 2511</h2>
                <p class="text-light text-left">Sumbersari, Malang</p>
                <p class="text-light text-left" style="margin-top:-1vh !important">Rating : 100/100</p>
        </div>
        
        <div class="col-3 row">
        <div class="col-12" style="margin-bottom:-5vh;margin-top:3vh">
            <h3 class = "text-light" >Menerima</h3>
        </div>

        <div class="col-4">
          <div class="text-center">
            <div class="service-icon mt-5">
              <img src="../img/home/png/scooter.png" alt="">
            </div> 
        </div>
        </div>

        <div class="col-4">
          <div class="text-center">
            <div class="service-icon mt-5 ">
              <img src="../img/home/png/tutorial_ico_2.png" alt="">
            </div>
        </div>
        </div>

        <div class="col-4">
          <div class="text-center">
            <div class="service-icon mt-5">
              <img src="../img/home/png/sportbike.png" alt="">
            </div>
        </div>
      </div>
    </div>

    </a>
    </div>
    
   
  <!-- javascript -->
    <?php include '../home/javascript.php' ?>
  <!-- javascript END -->

</body>
</html>