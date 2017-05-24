<?php
if($_SESSION['level']=="admin"){
include("../lib/config.php");
$kd=$_GET['kd_user'];
if($kd=="1"){
	echo "tidak bisa hapus admin utama
	<input onclick='back()' type='button' name='' value='Kembali'>
	";
	}
else{
$query="DELETE FROM user WHERE kd_user='$kd'";
$result=mysql_query($query);
if(!empty($_GET['p']))
			{
				if(file_exists($_GET['p'].".php"))
				{
					require_once($_GET['p'].".php");
				}
			}
echo header ("Location: admin.php?p=user");
}
}
?>
