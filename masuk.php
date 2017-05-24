<head>
<title>Masuk Sistem</title>
<!--////////////////////////////////////////////////////////////////////////
//Perintah untuk menggunakan script login.css untuk set. tampilan         //
/////////////////////////////////////////////////////////////////////////-->
<link rel="stylesheet" href="css/login_umum.css" type="text/css" />
<link rel="stylesheet" href="jquery/css/dark-hive/jquery-ui-1.10.3.custom.css">
<script src="js/jquery.min.js"></script>
<script src="jquery/js/jquery-ui-1.10.3.custom.js"></script>
</head>
<?php include("lib/config.php");?>
<body>
<div id="judul">Sambadha Computer Club</div>
<form action="cek_login.php" method="post">
<!--////////////////////////////////////////////////////////////////////////
//script yang menampilkan form login                                      //
/////////////////////////////////////////////////////////////////////////-->
<div id="isi">
<table>

	<tr>
		<td id="gambar" rowspan="3"><img align="right" src="images/mydocs128.png" width="100" height="100"></td>
		<td>Username</td>
		<td><input type="username" name="username"></td>
	</tr>

	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>

	<tr>
		<td><a href="formdaftar.php"><input id="buttonback" type="button" value="Daftar"></a></td>
		<td><input id="button" type="submit" name="submit" value="Oke"></td>
	</tr>

</table> 
</div>
<!--////////////////////////////////////////////////////////////////////////
//akhir script yang menampilkan form login                                //
/////////////////////////////////////////////////////////////////////////-->
</form>
<div id="mark"><i>Engine's code is copyright &copy; 2013 Hanjara C. A. versi 1.0</i></div>
</body>
