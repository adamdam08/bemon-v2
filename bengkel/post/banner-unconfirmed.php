  <!--================ Banner Section start =================-->
  <?php 
  include_once '../php/session_checker.php';
  include_once 'php/session_checker.php';
  include_once'php/greeting.php';
  ?>
  <section class="user-banner text-center" style="padding-top:12vh;">
    <div class="container">
      <p class="text-uppercase text-light">BENGKEL MOTOR ONLINE FOR BENGKEL</p>
      <h1 class="text-uppercase  text-light"><?php greeting(); ?><br>ADMIN <?php echo $username?></h1>
      <h3 class="text-uppercase  text-light">Akun Anda Belum Dikonfirmasi Oleh Admin</h3>
      <h5 class="text-uppercase  text-light">Tidak dapat menerima reservasi, sampai Akun Anda dikonfirmasi oleh admin</h5>
    </div>
  </section>
  <!--================ Banner Section end =================-->