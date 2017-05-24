<link rel="stylesheet" href="../css/isi.css" type="text/css" />

<body>
<?php
if($_SESSION['level']=="admin"){
include("../lib/config.php");
$query="SELECT * FROM user ORDER BY kd_user";
$result=mysql_query($query);
echo "
	<table id='form-user' border='1'>
	<div id='h1'><center><h1>User Manager</h1></center></div>
	<tr id='datauser' align='center'>
		<td width='50'>ID</td>
		<td>USERNAME</td>
		<td>LEVEL</td>
		<td>EDIT</td>
		<td>HAPUS</td>
	</tr>";
while($row=mysql_fetch_array($result))
{
	echo"
	<tr bgcolor='white' align='center' height='35'>
	<td>$row[kd_user]</td>
	<td>";
echo base64_decode($row['username']);
	echo"</td>";
if($row['kd_user']==1){
	echo"
	<td>$row[level] utama</td>
	<td class='tmbl'><a class='dt' href='admin.php?p=form_edit_user&kd_user=$row[kd_user]'>EDIT</a></td>
	<td class='tmbl'><a class='dt' href='admin.php?p=hapus_user&kd_user=$row[kd_user]'>HAPUS</a></td>";}
else{
	echo"
	<td>$row[level]</td>
	<td class='tmbl'><a class='dt' href='admin.php?p=form_edit_user&kd_user=$row[kd_user]'>EDIT</a></td>
	<td class='tmbl'><a class='dt' href='admin.php?p=hapus_user&kd_user=$row[kd_user]'>HAPUS</a></td>
	</tr>
	";}
}
mysql_close($koneksi);


echo"</table>";
//echo"<a href='admin.php?p=form_input_user'><input name='input_user' type='submit' value='tambah'/></a>";
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
