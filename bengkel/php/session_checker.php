<?php 
    if(session_id() == '' || !isset($_SESSION)) {
        session_start();
    }
    if(isset($_SESSION['bengkel']) == false){
        header("location:../../bengkel");
    }
?>