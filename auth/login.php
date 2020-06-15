<div id="input_email" class="container mx-auto align-middle">
        <div class="login-form  mx-auto pt-3 pb-3 pl-4 pr-4">
            <form action="php/login_engine.php" method="post">
                <div style="margin-top:2vh !important;">
                    <img width=125 class="float-left" src="../img/bemon-logo.png"/>
                    <h3 class="text-light text-right pt-2">LOGIN AKUN </h3>
                </div>

                <div style="margin-top:4vh !important;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text ti-email" id="basic-addon1"></span>
                    </div>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Email Anda" aria-label="Username" aria-describedby="basic-addon1" required pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}" oninvalid="Invalidem(this);" oninput="Invalidem(this);">
                </div>

                <div class="mb-1">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text ti-lock" id="basic-addon1"></span>
                    </div>
                        <input type="password" name="sandi" class="form-control" placeholder="Masukan Sandi Anda" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
        </div>
        
        <div style="margin-top:3vh">
			    <div class="form-group">
                   
					<button type="submit" class="text-light btn  btn-primary float-right px-auto" >Masuk akun</button>
                    <?php if($_SESSION['kode_register'] == "0") { ?>
                        <a href="?page=r_customer"  class="text-light  btn btn-link  float-left px-auto">Buat akun</a>
                    <?php }else if($_SESSION['kode_register'] == "1"){ ?>
                        <a href="?page=r_bengkel"  class="text-light  btn btn-link  float-left px-auto">Buat akun</a>
                    <?php } else {
                            
                        } ?>
                </div>
            </div>
        </form>
        <div>
        </div>
        <div class="mx-auto" style="margin-top:9vh">
            <hr class="bg-light"/>
            <?php if($_SESSION['kode_register'] == "0") { ?>
                <a href="../index.php" class="button button-link text-light">Kembali Ke Beranda</a>
            <?php }else if($_SESSION['kode_register'] == "1"){ ?>
                <a href="../bengkel" class="button button-link text-light">Kembali Ke Beranda</a>
            <?php } ?>
        </div>
</div>

<!-- JAVA SCRIPT VALIDASI -->


<script type="text/javascript">
    
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

    // function Invalidpas(pass) { 
  
    //         if (pass.value === '') { 
    //             pass.setCustomValidity 
    //                   ('Password Harus diisi'); 
    //         } else if (pass.validity.patternMismatch) { 
    //             pass.setCustomValidity 
    //                   ('Harus 8 digit, dengan format Huruf Besar, Kecil dan Angka '); 
    //         } else { 
    //             pass.setCustomValidity(''); 
    //         } 
  
    //         return true; 
    //     }
</script>