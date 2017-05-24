<?php
include("../lib/config.php");
$kd_user=$_POST['kd_user'];
$usernm=$_POST['username'];
$username=base64_encode($usernm);
$password=$_POST['password'];
$pass=base64_encode($password);
$level=$_POST['level'];

$query="INSERT INTO user (kd_user, username, password, level)
	VALUE('$kd_user', '$username', '$pass', '$level')";
$result=mysql_query($query);
header("Location: admin.php?p=user");
if(!empty($_GET['p']))
			{
				if(file_exists($_GET['p'].".php"))
				{
					require_once($_GET['p'].".php");
				}
			}
?>
