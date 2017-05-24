<title>ADMINISTRATOR</title>
<div id="form">
<?php
session_start();
include("../lib/config.php");
include("header.php");
if(($_SESSION['level']=="admin") || ($_SESSION['level']=="user")){
	include('body.php');
	}
else{
header ("Location: masuk.php");
	}
include("footer.php");
?>
</div>
