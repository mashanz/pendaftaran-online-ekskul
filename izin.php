<?php
session_start();
include("lib/config.php");
if(($_SESSION['level']=="user")){
	include('index_login.php');
	}
else{
header ("Location: masuk.php");
	}
?>