 <?php 
   if($_SESSION['admin'] == null){
        header("location:../auth");
        $_SESSION['kode_register'] = "403";
   }
?>