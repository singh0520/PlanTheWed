<?php
error_reporting(0);
      session_start();
require_once('connection.php');
       $ginfo=$_POST['ginfo'];
       $user=$_SESSION['username'];

              $qry=mysql_query("UPDATE aboutbg SET aboutg='$ginfo' WHERE Email='$user'");
              
                 $_SESSION['txt']="Groom's Info Successfully Changed";
header('Location: editprofile.php');
?>