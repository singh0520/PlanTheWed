<?php
require_once '../connection.php'; // The mysql database connection script
session_start();
$email = $_SESSION['username'];
if(isset($_GET['task'])){
$task = $_GET['task'];
$idt = $_GET['taskID'];
$status = "0";
$query="INSERT INTO todo(Email,id,task,status)  VALUES ('$email','$idt','$task', '$status')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
echo $json_response = json_encode($result);
}
?>