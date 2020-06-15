  <!--================ Banner Section start =================-->
  <?php 
    include_once '../php/session_checker.php';
    include_once 'php/session_checker.php';
    include_once'php/greeting.php' 
  ?>
  <section class="user-banner text-center" style="padding-top:12vh;">
    <div class="container">
      <p class="text-uppercase text-light">BENGKEL MOTOR ONLINE FOR BENGKEL</p>
      <h1 class="text-uppercase  text-light"><?php greeting(); ?><br>ADMIN <?php echo $username?></h1>
      <p class="hero-subtitle text-light">Untuk memulai, Klik button Cari tampilkan reservasi</p>
      <a class="button button-outline" href="../bengkel/post/reservasi_page.php" >Tampilkan Reservasi</a>
    </div>
  </section>
  <!--================ Banner Section end =================-->