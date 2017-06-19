<?php
error_reporting(0);
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Services</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/3-col-portfolio.css" rel="stylesheet">
  <link href="css/nikhil.css" rel="stylesheet">
  <style>
    body  {
      background-image: url(/css/images/overlay.png) ,url(img/bc3.jpg);
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
        <select id="city" onchange="run()">
          <option value=""><?php session_start(); echo $_SESSION['city'];?></option>
          <option value="1">Ahmedabad</option>
          <option value="2">Bangalore</option>
          <option value="3">Chandigarh</option>
          <option value="4">Chennai</option>
          <option value="5">Coimbatore</option>
          <option value="6">Delhi</option>
          <option value="7">Goa</option>
          <option value="8">Gurgoan</option>
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
        <h1 class="page-header">SERVICES</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 portfolio-item">
        <?php $var ="Beauty-Parlours-For-Bridal/ct-337"; ?>
        <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/10.jpg' alt=''></a>" ?>
        <h3>
         <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Beauty Parlours For Bridal</a>" ?>
       </h3>
     </div>
     <div class="col-md-4 portfolio-item">
      <?php $var ="Bus-Hire-For-Wedding/ct-179765"; ?>
      <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/11.jpg' alt=''></a>" ?>

      <h3>
       <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Bus Hire For Wedding</a>" ?>
     </h3>
   </div>
   <div class="col-md-4 portfolio-item">
    <?php $var ="Car-Decorators/ct-104720"; ?>
    <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/12.jpg' alt=''></a>" ?>

    <h3>
     <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Car Decorators</a>" ?>
   </h3>
 </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
  <div class="col-md-4 portfolio-item">
   <?php $var ="Car-Hire-For-Wedding/ct-456343"; ?>
   <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/13.jpg' alt=''></a>" ?>

   <h3>
     <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Car Hire for Wedding</a>" ?>
   </h3>
 </div>
 <div class="col-md-4 portfolio-item">
   <?php $var ="Fashion-Designers-For-Bridal-Wear/ct-1000696984"; ?>
   <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/14.jpg' alt=''></a>" ?>

   <h3>
     <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Fashion Designers For Bridal Wear</a>" ?>
   </h3>
 </div>
 <div class="col-md-4 portfolio-item">
  <?php $var ="Horses-On-Hire/ct-129796"; ?>
  <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/15.jpg' alt=''></a>" ?>

  <h3>
   <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Horses On Hire</a>" ?>
 </h3>
</div>
</div>

<!-- Projects Row -->
<div class="row">
  <div class="col-md-4 portfolio-item">
   <?php $var ="Hotel-Reservations-For-Honeymoon/ct-173162"; ?>
   <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/16.jpg' alt=''></a>" ?>

   <h3>
     <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Hotel Reservations For Honeymoon</a>" ?>
   </h3>
 </div>
 <div class="col-md-4 portfolio-item">
  <?php $var ="Wedding-Cake-Retailers/ct-411543"; ?>
  <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/17.jpg' alt=''></a>" ?>

  <h3>
   <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Wedding Cake Retailers</a>" ?>
 </h3>
</div>
<div class="col-md-4 portfolio-item">
  <?php $var ="Pandits-For-Marriage/ct-48872"; ?>
  <?php echo "<a href=crawl_table.php?i=".urlencode($var)."><img class='img-responsive' src='img/18.jpg' alt=''></a>" ?>

  <h3>
   <?php echo "<a href=crawl_table.php?i=".urlencode($var).">Pandits For Wedding</a>" ?>
 </h3>
</div>
</div>
<!-- /.row -->

<hr>

<!-- Pagination -->
<div class="row text-center">
  <div class="col-lg-12">
    <ul class="pagination">
      <li>
        <a href="services.php">&laquo;</a>
      </li>
      <li >
        <a href="services.php">1</a>
      </li>
      <li class="active">
        <a href="services2.php">2</a>
      </li>

      <li>
        <a href="#">&raquo;</a>
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
<script src='js/foundation.min.js'></script>
<script>
  $(document).foundation();
</script>
<script type='text/javascript' src='js/skrollr.js' ></script>
<script type='text/javascript'>
  var skrollrini = skrollr.init();
</script>

</body>

</html>
