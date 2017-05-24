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
if($_SESSION['level']=="admin"){
echo "
	<div id='h1'><center><h1>Tambah Siswa</h1></center></div>
	<form action='admin.php?p=input_siswa' method='post' name='input_siswa' onsubmit='return validate(this);'>
	<table>

	<tr>
	<td>NIS</td>
	<td>:</td>
	<td><input type='text' value='' name='nis' onkeypress='return isNumberKey(event)'></td>
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
	<td>Level</td>
	<td>:</td>
	<td><input type='hidden' name='level' value='siswa'>&nbsp;SISWA</td>
	</tr>
	
	</table>
	<input type='submit' name='input_siswa' value='simpan'><input onclick='back()' type='button' name='' value='Kembali'>
	</form>
	";
}
else{
header ("Location: admin.php");
	}
?>
