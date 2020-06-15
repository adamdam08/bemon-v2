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
  <form action="edit.php">
<body class="text-center search-banner">
	<p></p>
   <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-email" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="Masukan Email Anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-mobile" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="telepon" class="form-control" placeholder="Masukan nomor telepon" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-email" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="Kapasitas" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-email" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                </div>
                <div style="margin-right: 35vh">
			    <div class="form-group">
					<button type="submit" class="text-light btn  btn-primary float-right px-auto"><a href="edit_proses.php"></a>Edit</button>
                </div>
            </div>