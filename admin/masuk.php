<head>
<title>Masuk Sistem</title>
<!--////////////////////////////////////////////////////////////////////////
//Perintah untuk menggunakan script login.css untuk set. tampilan         //
/////////////////////////////////////////////////////////////////////////-->
<link rel="stylesheet" href="../css/login.css" type="text/css" />
</head>

<body>
<!--////////////////////////////////////////////////////////////////////////
//menjalankan config.php di sini.                                         //
/////////////////////////////////////////////////////////////////////////-->
<?php include("../lib/config.php"); ?>

<!--////////////////////////////////////////////////////////////////////////
//mengirim data dari form login ke script cek_login utuk verifikasi       //
//username dan passwordnya                                                //
/////////////////////////////////////////////////////////////////////////-->
<form action="cek_login.php" method="post">

<!--////////////////////////////////////////////////////////////////////////
//perintah untuk menjalankan header.php                                   //
/////////////////////////////////////////////////////////////////////////-->
<?php include("header.php"); ?> 

<!--////////////////////////////////////////////////////////////////////////
//script yang menampilkan form login                                      //
/////////////////////////////////////////////////////////////////////////-->
<div id="isi">
<table>
	<tr>
		<td id="gambar" rowspan="3"><img align="right" src="../images/screen_settings_128.png" width="100" height="100"></td>
		<td>Username</td>
		<td><input type="username" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><a href="../"><input id="buttonback" type="button" value="Beranda"></a></td>
		<td><input id="button" type="submit" name="submit" value="Oke"></td>
	</tr>
</table> 
</div>

<!--////////////////////////////////////////////////////////////////////////
//perintah untuk menjalankan footer.php                                   //
/////////////////////////////////////////////////////////////////////////-->
<?php include("footer.php"); ?>

</form>
</body>
