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
if(e['password'].value != e['rpassword'].value) {
alert('Password yang di ketik ulang tidak sesuai dengan yang pertama. Silahkan ulangi.');
return false;
}
return true;
}
</SCRIPT>
<?php
include("../lib/config.php");
$hasil = mysql_query("SELECT * FROM user ORDER BY kd_user DESC");
$row=mysql_fetch_array($hasil);
$tb=1;
$dt=$row['kd_user'];
$id=$tb+$dt;
echo "";
if($_SESSION['level']=="admin"){
echo "
	<div id='h1'><center><h1>Form Tambah User</h1></center></div>
	<form action='admin.php?p=input_user' method='post' name='input_user' onsubmit='return validate(this);'>
	<table>

	<tr>
	<td>ID User</td>
	<td>:</td>
	<td><input type='hidden' value='$id' name='kd_user' onkeypress='return isNumberKey(event)'>&nbsp;$id</td>
	<td>*Otomatis oleh sistem</td>
	</tr>

	<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type='text' name='username'></td>
	</tr>

	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type='password' name='password'></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type='password' name='rpassword'></td>
	<td>*ketik ulang password-nya</td>
	</tr>

	<tr>
	<td>LEVEL</td>
	<td>:</td>
	<td><select name='level'>
	<option value='' selected></option>
	<option value='admin'>admin</option>
	<option value='user'>user</option>
	</td>
	</tr>
	
	</table>
	<input type='submit' name='input_user' value='simpan'><input onclick='back()' type='button' name='' value='Kembali'>
	</form>
	";
}
else{
header ("Location: admin.php");
	}
?>
