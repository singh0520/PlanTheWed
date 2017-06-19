<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PlantheWed | Services</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link href="css/nikhil.css" rel="stylesheet">
    <style>
        body{
            background-image: url(/css/images/overlay.png) , url(img/bc3.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="theme-transit">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">Home</a>
                    <select class="dropdown" id="city" onchange="run()">
                      <option value=""><?php session_start(); echo $_SESSION['city'];?></option>
                      <option value="1">Ahmedabad</option>
                      <option value="2">Bangalore</option>
                      <option value="3">Chandigarh</option>
                      <option value="4">Chennai</option>
                      <option value="5">Coimbatore</option>
                      <option value="6">Delhi</option>
                      <option value="7">Goa</option>
                      <option value="8">Gurgaon</option>
                      <option value="9">Hyderabad</option>
                      <option value="10">Indore</option>
                      <option value="11">Jaipur</option>
                      <option value="12">Kolkata</option>
                      <option value="13">Mumbai</option>
                      <option value="14">Noida</option>
                      <option value="15">Pune</option>
                  </select>
            </div>
        </div>
  </nav>

  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SERVICES
                <small></small>
            </h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <?php $var ="Banquet-Halls/ct-3705"; ?>
            <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/1.jpg' alt=''></a>" ?>

            <h3>
               <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Banquet Halls</a>" ?>
           </h3>
       </div>

       <div class="col-md-4 portfolio-item">
        <?php $var ="Jewellery-Showrooms/ct-1457"; ?>
        <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/2.jpg' alt=''></a>" ?>

        <h3>
           <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Jewellery Showrooms</a>" ?>
       </h3>
   </div>
   <div class="col-md-4 portfolio-item">
    <?php $var ="Boutiques/ct-4298"; ?>
    <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/3.jpg' alt=''></a>" ?>

    <h3>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Boutiques</a>" ?>
   </h3>
</div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
        <?php $var ="Wedding-Card-Printers/ct-456482"; ?>
        <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/4.jpg' alt=''></a>" ?>

        <h3>
           <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Wedding Card Printerss</a>" ?>
       </h3>

   </div>
   <div class="col-md-4 portfolio-item">
    <?php $var ="Wedding-Bands/ct-57026"; ?>
    <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/5.jpg' alt=''></a>" ?>

    <h3>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Wedding Bands</a>" ?>
   </h3>
</div>
<div class="col-md-4 portfolio-item">
    <?php $var ="Bridal-Wear-On-Hire/ct-245166"; ?>
    <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/6.jpg' alt=''></a>" ?>

    <h3>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Bridal Wear On Hire</a>" ?>
   </h3>
</div>
</div>

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
       <?php $var ="Furnitures-On-Hire/ct-1421"; ?>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/7.jpg' alt=''></a>" ?>

       <h3>
           <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Furnitures On Hire</a>" ?>
       </h3>
   </div>
   <div class="col-md-4 portfolio-item">
    <?php $var ="Caterers-For-Wedding/ct-315"; ?>
    <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/8.jpg' alt=''></a>" ?>

    <h3>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Caterers For Wedding</a>" ?>
   </h3>
</div>
<div class="col-md-4 portfolio-item">
    <?php $var ="Wedding-Photographers/ct-27566"; ?>
    <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/9.jpg' alt=''></a>" ?>

    <h3>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Photographers For Wedding</a>" ?>
   </h3>
</div>
</div>
<!-- /.row -->

<hr />

<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="services.php">&laquo;</a>
            </li>
            <li class="active">
                <a href="services.php">1</a>
            </li>
            <li>
                <a href="services2.php">2</a>
            </li>
            <li>
                <a href="services2.php">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->

<hr>



</div>
<!-- /.container -->
<script>
  function run(){
   var e = document.getElementById("city");
   var strUser = e.options[e.selectedIndex].text;
   window.location.href="temp.php?w="+strUser;
}
</script>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src='js/vendor/jquery.js'></script>
</body>

</html>
