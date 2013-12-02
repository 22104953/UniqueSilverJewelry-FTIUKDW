<?php 
    require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contoh Aplikasi Shopping Cart</title>
<style>
    h1, h2, h3, p {
        margin-top:0px;
        margin-bottom:10px;
    }
</style>
</head>
 
<body>
 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr valign="top">
    <td width="55%">
      <?php
    mysql_select_db($dbname, $conn);
    $query = mysql_query ("select * from produk");
    while ($rs = mysql_fetch_array ($query)) {
          
    ?>
      <?php
    }
    ?>
    </td>
    <td>&nbsp;</td>
    <td width="40%"><p>Keranjang Anda</p>
      <hr />
      <?php require("cart_view.php"); ?></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>