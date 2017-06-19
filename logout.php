<?php
error_reporting(0);
session_start();
if(session_destroy())
{
print"<h2>you have logged out successfully</h2>";
header('Location: /index.php');
}
?>