<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div id="input_email" class="container mx-auto align-middle" style="margin-top:-10vh;">
        <div class="login-form  mx-auto pt-3 pb-3 pl-4 pr-4">
            
            <div style="margin-top:2vh !important;" class="clearfix">
                <img width=125 class="float-left" src="../img/bemon-logo.png"/>
                <h3 class="text-light text-right float-right ">DAFTAR CUSTOMER </h3>
            </div>
            
            <form name="myForm" action="php/register_engine.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                <div style="margin-top:1vh !important;">
                    <?php
                        $_SESSION['kode_register'] = "0" 
                    ?>
                </div>

                <div style="margin-top:4vh !important;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ti-user" id="basic-addon1"></span>
                        </div>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda" aria-describedby="basic-addon1" required pattern="[ a-zA-Z]+" id="nama" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);">
                    </div>
                </div>

                <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-email" id="basic-addon1"></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda" aria-describedby="basic-addon1"required pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}" oninvalid="Invalidem(this);" oninput="Invalidem(this);">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ti-mobile" id="basic-addon1"></span>
                                </div>
                                <input type="tel" name="telepon" class="form-control" placeholder="Masukan nomor telepon" aria-describedby="basic-addon1" oninvalid="Invalidhp(this);" oninput="Invalidhp(this);" required="" pattern="^\d{12}$">
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="mb-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ti-lock" id="basic-addon1"></span>
                        </div>
                        <input type="password" name="sandi" class="form-control" placeholder="Masukan Sandi Anda" aria-label="Username" aria-describedby="basic-addon1" id="password" oninvalid="Invalidpas(this);" oninput="Invalidpas(this);" required>
                    </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ti-lock" id="basic-addon1"></span>
                        </div>
                        <input type="password" name="sandi" class="form-control" placeholder="Konfirmasi Sandi Anda" aria-label="Username" aria-describedby="basic-addon1"  id="confirm_password" required>
                    </div>
                        </div>
                    </div> 
                </div>

                <div class="mb-1">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-default" type="button"><span class="ti-file"></span></button>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="input_file" required onchange="Filevalidation()">
                            <label class="custom-file-label text-left text-black" for="input_file">Masukan Foto Kartu Identitas</label>
                        </div>
                    </div>
                </div>
        </div>
        
        <div style="margin-top:3vh">
            <div class="form-group">
                <button id="i_submit" type="submit" class="text-light btn  btn-primary float-right px-auto" >Daftar</button>
                <a href="../auth"  class="text-light  btn btn-link  float-left px-auto">Login Saja</a>
            </div>
        </div>
        </form>
        <div class="mx-auto" style="margin-top:9vh">
            <hr class="bg-light"/>
            <a href="../index.php" class="button button-link text-light">Kembali Ke Beranda</a>
        </div>
</div>


<!-- JAVA SCRIPT VALIDASI -->
<!-- JAVA SCRIPT VALIDASI -->
<!-- JAVA SCRIPT VALIDASI -->
<!-- JAVA SCRIPT VALIDASI -->
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

         function Invalidem(email) { 
  
            if (email.value === '') { 
                email.setCustomValidity('Email Harus diisi'); 
            } else if (email.validity.patternMismatch) { 
                email.setCustomValidity ('Format email salah. Contoh : malanga1@gmail.com'); 
            } else { 
                email.setCustomValidity(''); 
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
    
    function Filevalidation(){ 
            var fi = document.getElementById('input_file'); 
            // Check if any file is selected.
            var pathFile = input_file.value;
            var ekstensiOk = /(.jpg)|(.png)$/i; 
            if (fi.files.length > 0) {

                if (!ekstensiOk.exec(pathFile)) {

                    fi.setCustomValidity("file yang diinput harus format jpg dan png");
                }else{

                    fi.setCustomValidity("");
                }
                for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                    const fsize = fi.files.item(i).size; 
                    const file = Math.round((fsize / 1024));
                         
                    // The size of the file. 
                    if (file >= 1536) { 
                        fi.setCustomValidity("File yang diinput lebih dari 1,5 MB");  
                    }else {document.getElementById('size').innerHTML = '<b>'+ file + '</b> KB'; 
                    } 
                } 
            } 
            return true;
        }
        fi.onkeyup = Filevalidation;

</script>

</body>
</html>





 