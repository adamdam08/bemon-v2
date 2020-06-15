<?php
include_once("koneksi.php");

if(isset($_POST['update']))
{
	$email = $_POST['email'];
	$kapasitas = $_POST['kapasitas'];
}

$result = mysqli_query($con, "Update pendaftaran_bengkel SET email='$email', kapasitas='$kapasitas' where id_pendaftaran = 1");
header("location: edit.php");
}
