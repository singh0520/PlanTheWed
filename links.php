<?php
      error_reporting(0);
      session_start();
require_once('connection.php');
       $bfb=$_POST['bfb'];
       $bt=$_POST['bt'];
       $gfb=$_POST['gfb'];
       $gt=$_POST['gt'];
       $user=$_SESSION['username'];

              $qry=mysql_query("UPDATE links SET bfb='$bfb',bt='$bt',gfb='$gfb',gt='$gt' WHERE Email='$user'");
              
                 $_SESSION['txt']="Social Links Successfully Changed";
header('Location: editprofile.php');
    ?>
