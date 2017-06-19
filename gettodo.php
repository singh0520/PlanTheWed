<?php
error_reporting(0);
session_start();
require_once 'connection.php';
$q = $_GET['q'];
$query="select ID, TASK, STATUS from todo;";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$cnt=0;$tot=0;
$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;
		if($row['STATUS']==0)
		{$cnt++;$tot++;}
		else
		$tot++;
	}
}
$done = array($cnt,$tot);
$pro = floor(($cnt/$tot)*100);
$_SESSION['progress'] = $pro;