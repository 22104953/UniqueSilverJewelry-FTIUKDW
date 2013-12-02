<?php
include_once("koneksi.php");
session_start();

if (isset($_POST['login_button']))
{
	if (!get_magic_quotes_gpc())
	{ 
		$email = addslashes(mysql_real_escape_string(strip_tags(trim($_POST['email']))));
		$password = addslashes(mysql_real_escape_string(strip_tags(trim($_POST['password']))));
	} 
	else 
	{
		$email = mysql_real_escape_string(strip_tags(trim($_POST['email'])));
		$password = mysql_real_escape_string(strip_tags(trim($_POST['password'])));
	}
	
	
		$sql="select * from user where email='$email' and password='".md5( $password )."'";
		$hasil = mysql_query($sql);
		$count=mysql_fetch_row($hasil);

		/*session_start();*/
		/*$_SESSION['nim']=$nim;
		$_SESSION['nama']=$nama;*/

		$err = 0;
		
		if(mysql_num_rows($hasil)==1) 
		{
		/*session_register("nim");
		session_register("password");*/
		
		
		
		$id_user = $count[0];
		
		$_SESSION["id_user"] = $id_user;
		$email = $count[1];
		$_SESSION["email"] = $email;
		$nama_depan = $count[2];
		$_SESSION["nama_depan"] = $nama_depan;
		$password = $count[3];
		$_SESSION["password"] = $password;
		
		if($count[0] == 1)
			header("location:index_admin.php");
		else if($count[0] == 2)
			header("location:index_member.php");
		}
		
		else
		{
			$err = 1;
			header("Location:akun.php?err=".$err);	 

		}
?>
	<?php }?>