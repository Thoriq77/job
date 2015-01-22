<?php
	$lokal="localhost";
	$user="root";
	$password="";
	$db="jobhouse";

	$koneksi=mysql_connect($lokal, $user, $password);
	mysql_select_db($db, $koneksi) or die ("Koneksi gagal bossss");
?>