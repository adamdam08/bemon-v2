<?php 
    $data = $_GET['id'];
?>
<?php 
  session_start();
  $_SESSION["page_admin"] = "suspend_bengkel.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  	<!-- Sidebar -->
    <?php 
      include 'sidebar.php';
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php include 'navbar.php'  ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            	<?php 
            			$sql = mysqli_query($con, "SELECT * FROM account INNER JOIN data_bengkel ON account.id_account = data_bengkel.id_account where level = '3'");
            			$data = mysqli_fetch_array($sql)?>

            		 <h6 class="m-0 font-weight-bold text-primary mr-auto">Data <?php echo "$data[nama_bengkel]";?></h6>
            </div>
            <div class="card-body">
                   
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nama Bengkel</label>
                                    <input type="text" value="<?php echo "$data[nama_bengkel]";?>" class="form-control bg-light border-dark" id="inputEmail4" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Nama Pemilik</label>
                                    <input type="text" value="<?php echo "$data[nama_pemilik]";?>" class="form-control bg-light border-dark" id="inputPassword4" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Kapasitas Bengkel</label>
                                    <input type="text" value="<?php echo "$data[kapasitas]";?> Motor" class="form-control bg-light border-dark" id="inputPassword4" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Kartu Identitas</label>
                                    <button type="button" class="btn btn-light form-control border-dark text-left" data-toggle="modal" data-target="#kitas">
                                        Cek Kartu Identitas
                                    </button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Alamat berdasarkan Koordinat</label>
                                    <button type="button" class="btn btn-light form-control border-dark text-left" data-toggle="modal" data-target="#koordinat">
                                        Cek Alamat
                                    </button>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Surat Usaha</label>
                                    <button type="button" class="btn btn-light form-control border-dark text-left" data-toggle="modal" data-target="#suhas">
                                        Cek surat usaha
                                    </button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="btn-group btn-group-justified">
                                    <a href="php/unsuspend_engine.php?id=<?php echo "$data[id_account]";?>" class="btn btn-success">Unsuspend</a>
                                    <a href="php/hapus_engine.php?id=<?php echo "$data[id_account]";?>"  class="btn btn-danger">Hapus</a>
                                    <button type="button" class="btn btn-primary" onclick="window.history.go(-1); return false;">Kembali</button>
                            </div>
                                </div>
                            </div>


          </div>
        <!-- /.container-fluid -->

<!-- Modal VIEW Surat Usaha -->
<div class="modal fade" id="suhas">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cek Surat Usaha</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <img class=""src="../auth/php/surat_usaha/<?php echo "$data[surat_usaha]";?>"/>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal VIEW Surat Usaha -->
<div class="modal fade" id="kitas">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cek Kartu Identitas</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <img class=""src="../auth/php/kitas_owner/<?php echo "$data[kitas]";?>"/>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal VIEW Alamat -->
<div class="modal fade" id="koordinat">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tampilkan Peta</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <iframe width="100%" height="250px" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo "$data[koordinat]";?>&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.emojilib.com"></a>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
        
      </div>
    </div>
  </div>
</div>

      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php 
    include 'logout_modal.php';
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>



</html>