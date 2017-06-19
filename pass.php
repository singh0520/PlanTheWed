<?php
      error_reporting(0);
      session_start();
require_once('connection.php');
       $old=$_POST['old'];
       $new1=$_POST['new1'];
       $new2=$_POST['new2'];
       $user=$_SESSION['username'];
       $qry=mysql_query("SELECT password FROM log WHERE Email='$user'");
       $row = mysql_fetch_array($qry);
       $p=$row['password'];
       if($new1 == $new2)
       {
           if($old == $p)
           {
               $qry=mysql_query("UPDATE log SET password='$new1' WHERE Email='$user'");
               header('Location: editprofile.php');
           }
           
       }
       else
       {
         echo "<html>
              <body>
                <h2>Invalid match</h2>
                <a href='editprofile.php'>Go back</a>
               </body>
              </html>";
       }
              
          
    ?>
