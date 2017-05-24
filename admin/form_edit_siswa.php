<link rel="stylesheet" href="../css/isi.css" type="text/css" />
<?php
include("../lib/config.php");
$nis=$_GET['username'];
$query="SELECT * FROM anggota WHERE username='$nis'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
<div id='h1'><center><h1>Informasi Tambahan</h1></center></div>
	<form action="" method="" name="edit_user">
	<table>

	<tr>
	<td id="lab">NAMA</td>
	<td>:</td>
	<td><?php echo $row['namane']; ?></td>
	</tr>

	<tr>
	<td id="lab">Telepon</td>
	<td>:</td>
	<td><?php echo $row['telp']; ?></td>
	</tr>

	<tr>
	<td id="lab">E-MAIL</td>
	<td>:</td>
	<td><?php echo $row['mail']; ?></td>
	</tr>
	
	<tr>
	<td id="lab">Facebook</td>
	<td>:</td>
	<td><?php echo $row['fb']; ?></td>
	</tr>

	<tr>
	<td id="lab">TWITTER</td>
	<td>:</td>
	<td><?php echo $row['twitter']; ?></td>
	</tr>
	
	<tr>
	<td id="lab">HOBI</td>
	<td>:</td>
	<td><?php echo $row['hobi']; ?></td>
	</tr>
	
	<tr>
	<td id="lab">ALASAN</td>
	<td>:</td>
	</tr>
	<tr>
	<td colspan="3"><div style="padding:5px; border:2px solid black; background:; width:400px;"><?php echo $row['alasan']; ?><div></td>
	</tr>
	
	</table>
	</form>