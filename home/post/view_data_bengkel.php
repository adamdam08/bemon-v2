<?php  include_once '../php/session_checker.php'; ?>
<form action="../php/make_reservation.php" method="POST" enctype="multipart/form-data">
                <div style="margin-top:2vh;">
                    <h6 class="text-light text-left">LOKASI BENGKEL <?php echo"$data[nama_bengkel]" ?></h6>
                    <iframe width="100%" height="250px" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo"$data[koordinat]" ?>&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div class="mb-1" >
                <h6 class="text-light text-left" style="margin-top:2vh;margin-bottom:2vh;">FORM RESERVASI <?php echo"$data[nama_bengkel]" ?></h6>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-file" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="seri_kendaraan" class="form-control" placeholder="Seri Kendaraan Anda" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-file" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="nopol" class="form-control" placeholder="No. POLISI" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-calendar" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="tanggal" readonly class="form-control" 
                                value="<?php
                                     date_default_timezone_set("Asia/Jakarta");
                                     $datetime = new DateTime('tomorrow');
                                     echo $datetime->format('Y-m-d');
                                ?>" placeholder="Tanggal Reservasi" aria-describedby="basic-addon1" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-alarm-clock" id="basic-addon1"></span>
                                </div>
                                <select name="jam" class="form-control" id="sel1" required>
                                    <option value="" selected disabled hidden>Pilih Jam</option>
                                    <?php 
                                        date_default_timezone_set("Asia/Jakarta");
                                        for($jam = 9; $jam<18; $jam++){ ?>
                                            <option value="<?php echo $jam ?>" ><?php echo $jam ?></option>
                                        <?php } ?>
                                </select>
                                <select name="menit" class="form-control" id="sel1" required>
                                    <option value="" selected disabled hidden>Pilih Menit</option>
                                    <?php 
                                        date_default_timezone_set("Asia/Jakarta");
                                        for($menit = 1; $menit<60; $menit++){ ?>
                                            <option value="<?php echo $menit ?>" ><?php echo $menit ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>               
        </div>

        <div style="margin-top:1vh">
            <div class="form-group">
                <div class="btn btn-group float-right">
                <a href="search_manual.php"  class="text-light  btn btn-danger  float-left px-auto">Keluar Reservasi</a>
                <button type="submit" class="text-light btn  btn-primary float-right px-auto" >Buat Reservasi</button>
                
                </div>
                
            </div>
        </div>
    </form>