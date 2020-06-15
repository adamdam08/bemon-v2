<!-- edit_sandi_engine.php -->
<?php  include_once '../php/session_checker.php'; ?>
<form action="../php/edit_sandi_engine.php" method="POST" enctype="multipart/form-data">
    <div class="mb-1 mt-4">
        <h6 class="text-light text-left">Perbarui Kata Sandi </h6>
        <div class="row mb-2">
            <div class="col-lg-12 col-md-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text ti-lock" id="basic-addon1"></span>
                    </div>
                    <input type="password" name="sandi_awal" class="form-control" placeholder="Kata Sandi Baru" aria-describedby="basic-addon1" id = "password" oninvalid="Invalidpas(this);" oninput="Invalidpas(this);" required>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-12 col-md-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text ti-lock" id="basic-addon1"></span>
                    </div>
                    <input type="password" name="sandi_konfirmasi" class="form-control" placeholder="Konfirmasi kata Sandi Baru" aria-describedby="basic-addon1" id = "confirm_password" >
                </div>
            </div>
        </div> 
    </div>

    <div style="margin-top:3vh">
        <div class="form-group">
            <button type="submit" class="text-light btn  btn-primary float-right px-auto" >Perbarui Kata Sandi</button>
            <a href="../index.php"  class="text-light  btn btn-link  float-left px-auto">Kembali Ke Beranda</a>
        </div>
    </div>

</form>

<script type="text/javascript">
    
        function Invalidpas(pass) { 
  
            if (pass.value === '') { 
                pass.setCustomValidity 
                      ('Password Harus diisi'); 
            } else if (pass.validity.patternMismatch) { 
                pass.setCustomValidity 
                      ('Harus 8 digit, dengan format Huruf Besar, Kecil dan Angka '); 
            } else { 
                pass.setCustomValidity(''); 
            } 
  
            return true; 
        }      

        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Password berbeda");
                } else {
                    confirm_password.setCustomValidity('');
                }
                return true;
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;

        
       

</script>
