<link rel="stylesheet" href="css/index.css" type="text/css" />

<body>
<table id="table">
<tr>
<td id="header" colspan="4">
<?php

include("lib/config.php");
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$query="SELECT * FROM anggota WHERE username = '$username' AND password = '$password'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
</td>
</tr>
<tr id="menu">
<td id="home"></td>
<td id="user"></td>
<td id="anggota"></td>
<td id="keluar"></td>
</tr>

<tr>
<td id="menubar" colspan="3">
<div align="left" style="margin-top:-7px; padding-bottom:2px;" color="white"><img src="images/user_jawa.png" style="margin-bottom:-10px;">:: <i><?php echo $row['username']; ?></i> ::</u></div>
</td>
<td id="menubar" colspan="1">
<a href="logout.php">Logout<img title="Keluar dari sistem" align="right" src="images/door_in.png" height="20"></a>
</td>
</tr>

<tr>
<td id="isi" colspan="2">
<p><b>Identitas</b><p>
<p id="paragraf">
Nama : <?php echo $row['namane']; ?><br>
Kelamin : <?php echo $row['kelamin']; ?><br>
TTL : <?php echo $row['tlahir']; ?>, <?php echo $row['tgllahir']; ?><br>
Alamat : <?php echo $row['alamat']; ?><br>
</p>
<p><b>Informasi Tambahan</b><p>
<p id="paragraf">
No. Telepon : <?php echo $row['telp']; ?><br>
E-mail : <?php echo $row['mail']; ?><br>
Facebook : <?php echo $row['fb']; ?><br>
Twitter : <?php echo $row['twitter']; ?><br>
Hobi : <?php echo $row['hobi']; ?><br>
Alasan : <div style="margin-left:50px; margin-top:-15px; border:2px solid black; padding:2px; width:370px;"><?php echo $row['alasan']; ?></div><br>
</p>
</td>
<td id="sisikanan" colspan="2"><br>
<img id="komputer" align="right" src="images/my-computer-2.png">
</td>
</tr>
<tr><td id="footer" colspan="4"><i>Engine's code is copyright &copy; 2013 Hanjara C. A. versi 1.0</i></td></tr>

</table>
</body>
