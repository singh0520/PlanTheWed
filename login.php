<?php
error_reporting(0);
session_start();
$_SESSION['city']="Delhi";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
require_once('connection.php');

$error_flag = false;

$user = test_input($_POST['email']);
$pass = test_input($_POST['password']);

$_SESSION["username"]=$user;
$_SESSION['progress']=0;
if($user == ''){
   $error_flag = true;
}
if($pass == ''){
   $error_flag = true;
}

if($error_flag){
   echo "<br> Username or Password missing!</br>";
   echo "<br> <a href='log.php'>Please login again!</a></br>";
    exit();
}
$qry = "SELECT * FROM log WHERE Email='$user' AND password='$pass'";
$result = mysql_query($qry);
if($result){
     if(mysql_num_rows($result) > 0){
         setcookie("ptwsessid");
         $_SESSION['username']=$user;
         header('Location: /home.php');
     }
    else{
        $error_flag = true;
        if($error_flag){
           echo '<br>Username and Password not found!</br>';
           echo "<br> <a href='log.php'>Please login again!</a></br>";
        }
    }
}
else{
   die("Query failed!");
}
?>
