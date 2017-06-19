<?php
error_reporting(0);
      session_start();
require_once('connection.php');
       $date=$_POST['date'];
       $user=$_SESSION['username'];

              $qry=mysql_query("UPDATE login SET Wdate='$date' WHERE Email='$user'");
              
                 $_SESSION['txt']="Date Successfully Changed";
                 header('Location: editprofile.php');
    ?>