<?php
	include_once 'session_engine_checker.php';
	function greeting()
	{
		date_default_timezone_set("Asia/Jakarta");
		$time = date("H:i");
	if ($time>=00 and $time<10) 
		{echo "Selamat Pagi";} 
	else if ($time>=10 and $time<15)
		{echo "Selamat Siang";} 
	else if ($time>=15 and $time<19)
		{echo "Selamat Sore";} 
	else if ($time>=19 and $time<24)
		{echo "Selamat Malam";}
	else echo "<h2>Waktu salah</h2>";}
?>