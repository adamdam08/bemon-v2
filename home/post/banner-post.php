<?php
    include_once '../php/session_checker.php';
    include_once 'php/session_checker.php';
?>
<!--================ Banner Section start =================-->
  <?php include_once'php/greeting.php'?>
  <section class="user-banner text-center" style="padding-top:12vh;">
    <div class="container">
      <p class="text-uppercase text-light">BENGKEL MOTOR ONLINE</p>
      <h1 class="text-uppercase  text-light"><?php greeting(); ?><br><?php echo $username?></h1>
      <p class="hero-subtitle text-light">Untuk memulai pencarian bengkel. Klik button Cari bengkel sekarang</p>
      <a class="button button-outline" href="../home/post/search_manual.php" >Cari bengkel sekarang</a>
    </div>
  </section>
  <!--================ Banner Section end =================-->