<?php
include("lib/config.php");
$level="user";
$username=$_POST['username'];
$password=$_POST['password'];
$namane=$_POST['namane'];
$kelamin=$_POST['kelamin'];
$tlahir=$_POST['tlahir'];
$tgllahir=$_POST['tgllahir'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$mail=$_POST['mail'];
$fb=$_POST['fb'];
$twitter=$_POST['twitter'];
$hobi=$_POST['hobi'];
$alasan=$_POST['alasan'];

$query="INSERT INTO anggota (level, username, password, namane, kelamin, tlahir, tgllahir, alamat, telp, mail, fb, twitter, hobi, alasan)
	VALUE('$level', '$username', '$password', '$namane', '$kelamin', '$tlahir', '$tgllahir', '$alamat', '$telp', '$mail', '$fb', '$twitter', '$hobi', '$alasan')";
$result=mysql_query($query);
header("Location: index.php");
?>