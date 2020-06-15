<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
      <?php 
          include_once 'php/validator_engine.php';
          include_once 'php/koneksi.php';
          $_SESSION['kode_logout'] = '2';
      ?>
      <!-- Sidebar - Brand
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">BE-MON ADMIN</div>
      </a> -->

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php 
          if($_SESSION["page_admin"] == "index.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        data
      </div>

      <!-- Nav Item - Tables -->
      <!-- Nav Item - Dashboard -->
      <?php 
          if($_SESSION["page_admin"] == "data_bengkel.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="data_bengkel.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Bengkel</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <?php 
          if($_SESSION["page_admin"] == "data_customer.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="data_customer.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Customer</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <?php 
          if($_SESSION["page_admin"] == "data_pemesanan.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="data_pemesanan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Pemesanan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Akun
      </div>

      <!-- Nav Item - Tables -->
      <?php 
          if($_SESSION["page_admin"] == "akun_bengkel.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="akun_bengkel.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Bengkel</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <?php 
          if($_SESSION["page_admin"] == "akun_customer.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="akun_customer.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Customer</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        BLokir
      </div>

      <!-- Nav Item - Tables -->
      <!-- Nav Item - Dashboard -->
      <?php 
          if($_SESSION["page_admin"] == "suspend_bengkel.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="suspend_bengkel.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Bengkel</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <?php 
          if($_SESSION["page_admin"] == "suspend_customer.php"){
            echo"<li class='nav-item active'>";    
          }else{
            echo"<li class='nav-item'>";
          }
      ?>
        <a class="nav-link" href="suspend_customer.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Customer</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
 
      <!-- Sidebar Toggler (Sidebar)
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>