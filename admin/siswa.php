<link rel="stylesheet" href="../css/isi.css" type="text/css" />

<body>
<?php
if($_SESSION['level']=="admin"){
include("../lib/config.php");
$query="SELECT * FROM anggota ORDER BY username";
$result=mysql_query($query);
echo "
	<table id='form-user' border='1'>
	<div id='h1'><center><h1>Daftar Anggota SCC</h1></center></div>
	<tr id='datauser' align='center'>
		<td>No.</td>
		<td width='50'>USERNAME</td>
		<td>NAMA ANGGOTA</td>
		<td>GENDER</td>
		<td>TTL</td>
		<td>ALAMAT</td>
		<td>Lihat</td>
	</tr>";

$i=1;
	while($row=mysql_fetch_array($result))
{
	echo"
	<tr bgcolor='white' align='center' height='35'>
	<td>" . $i . "</td>
	<td>$row[username]</td>
	<td>";
	
echo $row['namane'];
	echo"</td>
	<td>$row[kelamin]</td>
	<td>$row[tlahir],&nbsp;$row[tgllahir]</td>
	<td>$row[alamat]</td>
	<td class='tmbl'><a class='dt' href='admin.php?p=form_edit_siswa&username=$row[username]'>LIHAT</a></td>
	</tr>
	";
$i++;
}
mysql_close($koneksi);


echo"</table>";
}
else{
	echo"MAAF, anda tidak punya akses ke halaman ini.";
	}
if(!empty($_GET['p']))
			{
				if(file_exists($_GET['p'].".php"))
				{
					require_once($_GET['p'].".php");
				}
			}

else{
	header ("Location: admin.php?p=salam");
	}
?>
</body>
