<?php
error_reporting(0);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
require_once('connection.php');
$bName=test_input($_POST['BName']);
$gName=test_input($_POST['GName']);
$bNamel=test_input($_POST['BNamel']);
$gNamel=test_input($_POST['GNamel']);
$pass=test_input($_POST['password']);
$Email=test_input($_POST['eid']);
$pass1=test_input($_POST['password1']);
$wdate=$_POST['wedate'];
session_start();
if($bName==''|| $gName=='' || $pass=='' || $Email=='' || $pass1=='' || $wdate=='' ){
       if($bName=='')
       { echo "<br> Bride's name is missing!</br>";}
    if($gName=='')
       { echo "<br> Groom's name is missing!</br>";}
    if($pass=='')
       { echo "<br> Password is missing!</br>";}
    if($Email=='')
       { echo "<br> Email address is missing!</br>";}
    if($pass1=='')
       { echo "<br> Yoh haven't re-entered your password!</br>";}
    if($wdate=='')
       { echo "<br> Date is missing!</br>";}
    }
    if ($_POST['captcha-text']!= $_SESSION['captcha']['code']) {
      echo "Invalid Captcha Code";
      session_destroy();

    echo "<br>Please register again!</br>";
    echo "<br><a href='log.php'>go to login page</a></br>";
    exit();

}

if($pass == $pass1){
$sql = "INSERT INTO login (`Email`, `bName`, `bNamel`, `gName`, `gNamel`, `Wdate`) VALUES ('$Email', '$bName','$bNamel','$gName','$gNamel','$wdate')";
$sql1 = "INSERT INTO log VALUES('$pass','$Email')";
$sql2 = "INSERT INTO links VALUES('$Email','','','','')";  
$sql3 = "INSERT INTO aboutbg VALUES('$Email','','')";
$sql4 = "INSERT INTO venue VALUES('$Email','')"; 

if(!mysql_query($sql) || !mysql_query($sql1) || !mysql_query($sql2) || !mysql_query($sql3) || !mysql_query($sql4)){
   die('Error:'.mysql_error());
}
else{
  include_once "classes/user.class.php";
  $regUser = new user();
  $regUser->writeInfo($Email);
$page = include_once "log.php";
echo $page;
}}
else {print "<br>passwords do not match</br>";
      print "<br><a href='log.php'>go to login page</a></br>";}

mysql_close();

?>