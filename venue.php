<?php
	error_reporting(0);
      session_start();
require_once('connection.php');
       $ven=$_POST['ven'];
       $user=$_SESSION['username'];

              $qry=mysql_query("UPDATE venue SET venue='$ven' WHERE Email='$user'");
              
                 $_SESSION['txt']="Venue Successfully Changed";
                 header('Location: editprofile.php');
    ?>