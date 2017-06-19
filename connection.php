<?php 
error_reporting(0);
$hostname='localhost';
$username='root';
$password='';
$dbname='main';

$connection = mysql_connect($hostname, $username, $password);
$mysqli = new mysqli($hostname, $username, $password, $dbname);

if (!$connection) {
  die('Failed to connect to MySQL: ' . mysql_error());
}

$db_selected = mysql_select_db($dbname, $connection);

if(!$db_selected){
  die('cant use'. $dbname . ':'. mysql_error()); 
}


?>
