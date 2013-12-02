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
		<td>Nama Depan</td>
		<td>Nama belakang</td>
		<td>Email</td>
		<td>Telepon</td>
		<td>Password</td>
		<td>Hapus Data</td>
	</tr>
	
	<?php
	$query = mysql_query("Select * from user");
	while($data = mysql_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>".$data['nama_depan']."</td>";
		echo "<td>".$data['nama_belakang']."</td>";
		echo "<td>".$data['email']."</td>";
		echo "<td>".$data['telepon']."</td>";
		echo "<td>".$data['password']."</td>";
		echo "<td><a href='hapus_data_user.php?id_user=".$data['id_user']."'>Hapus</a></td>";
		echo "<tr>";
	}
	?>
	</table>

</body>
</html>




	


