<?php
  $dbuser = "root";
  $dbpass = "";
  $dbhost = "localhost";
  $dbname = "unique_silver";
  
  $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die("Database tidak bisa dibuka");
  mysql_select_db($dbname) or die("koneksi gagal");
?>