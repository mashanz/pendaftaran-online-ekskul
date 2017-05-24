<link rel="stylesheet" href="../css/isi.css" type="text/css" />
<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
//-->

function validate(form) {
var e = form.elements;

/* validation code. */
if(e['opassword'].value != e['rpassword'].value) {
alert('Password lama salah. Silahkan ulangi.');
return false;
}
return true;
}
</SCRIPT>

<?php
if($_SESSION['level']=="admin"){
include("../lib/config.php");
$kd_user=$_GET['kd_user'];
$query="SELECT * FROM user WHERE kd_user='$kd_user'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$usr=base64_decode($row['username']);
$pwd=base64_decode($row['password']);
echo "	<div id='h1'><center><h1>Form Edit User</h1></center></div>
	<form action='admin.php?p=edit_user' method='post' name='edit_user' onsubmit='return validate(this);'>
	<table>

	<tr>
	<td></td>
	<td></td>
	<td><input type='hidden' name='kd_user' onkeypress='return isNumberKey(event)' value='$row[kd_user]'></td>
	</tr>

	<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type='text' name='username' value='$usr'></td>
	</tr>

	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type='hidden' name='opassword' value='$pwd'><input value='$pwd' type='hidden' name='rpassword'>&nbsp;$pwd</td>
	<td>*Password yang lama</td>
	<tr>
	<td></td>
	<td></td>
	<td><input type='password' name='password' value=''></td>
	<td>*Pasword baru</td>
	</tr>";
if($kd_user=="1"){
	echo"<tr>
	<td></td>
	<td></td>
	<td><input type='hidden' name='level' value='admin'></td>
	</tr>
	</table>
	<input type='submit' name='input_user' value='simpan'>
	<input onclick='back()' type='button' name='' value='Kembali'>
	</form>
	";
	}
else{
echo"
	<tr>
	<td>LEVEL</td>
	<td>:</td>
	<td><select name='level' value='$row[level]'>
	<option value='$row[level]'  selected>$row[level]</option>
	<option value='admin'>admin</option>
	<option value='user'>user</option>
	</td>
	</tr>
	
	</table>
	<input type='submit' name='input_user' value='simpan'>
	<input onclick='back()' type='button' name='' value='Kembali'>
	</form>
	";
}
}
else{
header ("Location: admin.php");
	}
?>
