<?php
	session_start();
	include("koneksi.php");
	$id_pesan = $_GET['id_hubungi'];
	
		$query = "DELETE from hubungi where id_hubungi='$id_pesan'";
	
		if(mysql_query($query))
		header("location:hubungi_kami_admin.php");
?>