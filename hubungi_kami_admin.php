<?php

	include_once("koneksi.php");
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<title></title>

	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" href="bimbel_admin.css" type="text/css"/>


	<script type="text/javascript" src="jquery.js"></script>
	
	<script type="text/javascript">
		
			function liveclock()
			{
				var todayDate = new Date()
				var myYear = todayDate.getYear() + 1900
				var myMonth = todayDate.getMonth() + 1
				var myToday = todayDate.getDate()
			
				var mySec = todayDate.getSeconds()
				var myMin = todayDate.getMinutes()
				var myHour = todayDate.getHours()
			
				document.getElementById('time').innerHTML = myToday+ "/" +myMonth+ "/" +myYear+ " || "+myHour+":"+myMin+":"+mySec
				t = setTimeout('liveclock()',500)
			}
		</script>

</head>
<body onLoad="liveclock()" >

				<marquee><b>ADMINISTRATOR UniqueSilverJewelry</b></marquee>
					<p id="time"></p>
		
	<h2>Contact Us</h2>
	<table>
		<?php
		$query = mysql_query("select * from hubungi");
		while($data=mysql_fetch_assoc($query))
		{
			echo "<tr><td>Nama</td><td> : ".$data['nama']."</td></tr>";
			echo "<td>E-mail</td><td> : ".$data['email']."</td></tr>";
			echo "<tr><td>Pesan</td><td> : ".$data['pesan']."</td></tr>";
			echo "<tr><td>Tanggal</td><td> : ".$data['tanggal']."</td></tr>";
			echo "<td><a href='hapus_data_hubungi.php?id_hubungi=".$data['id_hubungi']."'onClick=\"return confirm('Yakin akan menghapus data?')\"><b>Hapus data<b></a></td>";

		}
		?>
	</table>

</body>
</html>