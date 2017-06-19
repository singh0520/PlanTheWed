<?php
error_reporting(0);
session_start();
$_SESSION['city']=$_GET['w'];
header("Location:services.php");
?>