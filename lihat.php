<?php
include_once("koneksi.php");
?>


<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title></title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="" type="text/css"/>
	
</head>
<body>
   <table border="1">
	<h2>Member</h2>

	<tr>
		<td>id</td>
		<td>Nama</td>
		<td>harga</td>
		<td>total</td>
		
		
	</tr>
	
	<?php
	$query = mysql_query("Select * from produk");
	while($data = mysql_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['harga']."</td>";
		echo "<td>".$data['jumlah_harga']."</td>";
		
		
		echo "<tr>";
	}
	?>
	</table>

</body>
</html>




	


