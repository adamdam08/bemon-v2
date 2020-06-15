<?php 
    if(session_id() == '' || !isset($_SESSION)) {
        session_start();
    }
    if(isset($_SESSION['customer']) == false){
        header("location:../../home");
    }
?>