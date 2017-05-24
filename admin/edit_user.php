<?php
if($_SESSION['level']=="admin"){
include("../lib/config.php");
$kd=$_POST['kd_user'];
$usr=base64_encode($_POST['username']);
$pwd=base64_encode($_POST['password']);
$lvl=$_POST['level'];
If($lvl=="admin"){
$query="UPDATE user SET username='$usr', password='$pwd', level='$lvl' WHERE kd_user='$kd'";
$result=mysql_query($query);
echo header ("Location: admin.php?p=user");
}
else{
if(!empty($_GET['p']))
			{
				if(file_exists($_GET['p'].".php"))
				{
					require_once($_GET['p'].".php");
				}
			}
	echo "admini utama level harus admin
	<input onclick='back()' type='button' name='' value='Kembali'>";
}
}
?>
