<!-- edit_data_engine.php -->
<?php  include_once '../php/session_checker.php'; ?>
<form action="../php/edit_data_engine.php" method="POST" enctype="multipart/form-data">
            
            <form action="php/register_engine.php" method="POST" enctype="multipart/form-data">
                <div style="margin-top:1vh !important;">
                </div>
                <h6  style="margin-top:4vh !important;" class="text-light text-left text-uppercase">Perbarui Data CUSTOMER </h6>
                <div style="margin-top:1vh !important;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ti-user" id="basic-addon1"></span>
                        </div>
                        <input type="text" name="nama" value="<?php echo $data_x['nama']?>" class="form-control" placeholder="Masukan Nama Lengkap Anda" aria-describedby="basic-addon1" required pattern="[ a-zA-Z]+" id="nama" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);">
                    </div>
                </div>

                <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-email" id="basic-addon1"></span>
                                </div>
                                <input type="text" readonly  value="<?php echo $data_v['email']?>"  class="form-control" placeholder="Masukan Email Anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-mobile" id="basic-addon1"></span>
                                </div>
                                <input type="text" name="telepon" value="<?php echo $data_x['telepon']?>" class="form-control" placeholder="Masukan nomor telepon" aria-describedby="basic-addon1" oninvalid="Invalidhp(this);" oninput="Invalidhp(this);" required="" pattern="^\d{12}$">
                            </div>
                        </div>
                    </div> 
                </div>

                <div style="margin-top:3vh">
                    <div class="form-group">
                        <button type="submit" class="text-light btn  btn-primary float-right px-auto" >Perbarui Data</button>
                        <a href="../index.php"  class="text-light  btn btn-link  float-left px-auto">Kembali Ke Beranda</a>
                    </div>
                </div>
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

</script>




