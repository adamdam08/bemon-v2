<?php
    error_reporting(0);
    include_once '../php/session_checker.php';
    include_once 'php/session_checker.php';
?>
<body class="login-banner ">
  <!--================ Header Menu Area start =================-->
  <header class="header_area" >
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container ">

          <div class="float-left" style="min-width:15vw;">
          <a class="navbar-brand logo_h" href="../page"><img width=100 src="../img/bemon-logo.png"/></a>
          </div>
          <div class="float-right ">
          <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          </div>

          <!-- active -->

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent" style="overflow:hidden;">
            <ul class="nav navbar-nav mx-auto">
              <li class="nav-item"><a class="nav-link" href="../bengkel">Beranda</a></li>   
              <li class="nav-item"><a class="nav-link" href="../bengkel/post/reservasi_history.php">Riwayat Reservasi</a></li>
              <li class="nav-item"><a class="nav-link" href="../bengkel/post/edit_akun.php">Akun Anda</a></li>
            </ul>
            <?php $_SESSION['kode_logout'] = '1'?>
            <div class="float-right text-center text-lg-right py-4 py-lg-0" style="min-width:15vw;">
              <a class="button button-outline button-small" href="../auth/php/logout_engine.php">Keluar Akun</a>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->