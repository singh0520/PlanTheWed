<?php
      session_start();
require_once('connection.php');
       $binfo=$_POST['binfo'];
       $user=$_SESSION['username'];

              $qry=mysql_query("UPDATE aboutbg SET aboutb='$binfo' WHERE Email='$user'");
              
                 $_SESSION['txt']="Bride's Info Successfully Changed";
    				header('Location: editprofile.php');
?>