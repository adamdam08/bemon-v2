<?php include_once '../php/session_checker.php'; ?>
<!-- edit_data_engine.php -->
<form action="../php/edit_data_engine.php" method="POST" enctype="multipart/form-data">
    <div style="margin-top:1vh !important;">
        <h6 class="text-light text-left">Klik pada map untuk perbarui lokasi</h6>
        <?php include '../php/maps_engine.php'?>
        <input type="text" name="koordinat" value="<?php echo $data_x['koordinat'] ?>" readonly id="coordinate" class="form-control" placeholder="Titik koordinat Bengkel"/> 
    </div>

    <div class="mb-1" >
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text ti-user" id="basic-addon1"></span>
                    </div>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data_x['nama_pemilik'] ?>" placeholder="Masukan Nama Pemilik" aria-describedby="basic-addon1"id="nama" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text ti-user" id="basic-addon1"></span>
                    </div>
                    <input type="text" name="bengkel" class="form-control" value="<?php echo $data_x['nama_bengkel'] ?>" placeholder="Masukan Nama bengkel" aria-describedby="basic-addon1" oninvalid="Invalidbnk(this);" oninput="Invalidbnk(this);" required>
                </div>
            </div>
        </div> 
    </div>

    <div class="mb-1">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text ti-email" id="basic-addon1"></span>
                    </div>
                <input type="text" readonly class="form-control" value="<?php echo $data_v['email'] ?>" placeholder="Masukan Email Anda" aria-describedby="basic-addon1" required pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}" oninvalid="Invalidem(this);" oninput="Invalidem(this);">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text ti-mobile" id="basic-addon1"></span>
                    </div>
                <input type="text" name="telepon" class="form-control" value="<?php echo $data_x['telepon'] ?>" placeholder="Masukan nomor telepon" aria-describedby="basic-addon1" oninvalid="Invalidhp(this);" oninput="Invalidhp(this);" required="" pattern="^\d{12}$">
                </div>
            </div>
        </div> 
    </div>

    <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-user" id="basic-addon1"></span>
                                </div>
                                <input type="number" name="kapasitas" value="<?php echo $data_x['kapasitas'] ?>" class="form-control" placeholder="Kapasitas Bengkel" aria-describedby="basic-addon1" required pattern="[1-9]" oninvalid="Invalidkuot(this);" oninput="Invalidkuot(this);">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-location-pin" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="alamat" value="<?php echo $data_x['alamat'] ?>" class="form-control" placeholder="Kecamatan / Kota" aria-describedby="basic-addon1" id="alamat" required oninvalid="Invalidalm(this);" oninput="Invalidalm(this);">
                            </div>
                        </div>
                    </div> 
                </div>

    

    <div style="margin-top:3vh">
        <div class="form-group">
        <a href="../index.php"  class="text-light  btn btn-link  float-left px-auto">Kembali Ke Beranda</a>
            <button type="submit" class="text-light btn  btn-primary float-right px-auto" >Perbarui Data</button>
        </div>
    </div>
    <div>
</form>

<!-- Javascript -->
<script type="text/javascript">

function InvalidMsg(textbox) { 
  
  if (textbox.value === '') { 
      textbox.setCustomValidity 
            ('Nama Harus diisi'); 
  } else if (textbox.validity.patternMismatch) { 
      textbox.setCustomValidity 
            ('Tidak boleh angka, simbol dan titik'); 
  } else { 
      textbox.setCustomValidity(''); 
  } 

  return true; 
}

function Invalidbnk(beng) { 
  
  if (beng.value === '') { 
      beng.setCustomValidity 
            ('Nama Harus diisi'); 
  } else if (beng.validity.patternMismatch) { 
      beng.setCustomValidity 
            ('Tidak boleh angka, simbol dan titik'); 
  } else { 
      beng.setCustomValidity(''); 
  } 

  return true; 
}



function Invalidhp(number) { 

  if (number.value === '') { 
      number.setCustomValidity 
            ('Nome HP Harus diisi'); 
  } else if (number.validity.patternMismatch) { 
      number.setCustomValidity 
            ('Harus 12 digit dan berupa angka'); 
  } else { 
      number.setCustomValidity(''); 
  } 

  return true; 
}

function Invalidkuot(kuota) { 
  
  if (kuota.value === '') { 
      kuota.setCustomValidity 
            ('kuota Harus diisi'); 
  } else if (kuota.value < 1) { 
      kuota.setCustomValidity 
            ('Kuota tidak boleh kurang dari 1'); 
  }  else if (kuota.validity.patternMismatch) { 
      kuota.setCustomValidity 
            ('kuota harus angka'); 
  } else { 
      kuota.setCustomValidity(''); 
  } 

  return true; 
}

function Invalidalm(alm) { 

  if (alm.value === '') { 
  alm.setCustomValidity ('Alamat Harus diisi'); 
  } else { 
      alm.setCustomValidity(''); 
  }  

  return true; 
}      

</script>