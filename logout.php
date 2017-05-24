<?php
session_start();
include("lib/config.php");
session_destroy();
header("Location: index.php");
?>
