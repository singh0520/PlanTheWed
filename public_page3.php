<?php
error_reporting(0);
session_start();
require_once 'connection.php';
include_once "classes/user.class.php";
$user = new user();
$user->email = $_SESSION['username'];//Controls Everything
$qry = "SELECT bName,gName,Wdate,bNamel,gNamel FROM login WHERE Email='$user->email'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$user->bname = $row['bName'];
$user->gname = $row['gName'];
$user->bnamel = $row['bNamel'];
$user->gnamel = $row['gNamel'];
$user->wedate = $row['Wdate'];
$qry = "SELECT aboutg , aboutb FROM aboutbg where Email = '$user->email'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$user->aboutg = $row['aboutg'];
$user->aboutb = $row['aboutb'];
$qry = "SELECT bfb , bt , gfb , gt FROM links where Email = '$user->email'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$user->bfb = $row['bfb'];
$user->bt = $row['bt'];
$user->gfb = $row['gfb'];
$user->gt = $row['gt'];
$today = new DateTime("now");
$wdate = new DateTime($user->wedate);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PlanTheWed|Public Page</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/foundation.min.css" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<a href="#" class="image avatar"><img src='userdata/<?php echo $user->email;?>/tg.png' alt="" /></a>
				<h1><strong><?php echo $user->bname . ' ' . $user->bnamel . ' &amp; ' . $user->gname . ' ' . $user->gnamel;?></strong>
<?php
if ($today < $wdate) {
	echo "<br>are getting";
} else {
	echo "<br>got";
}

?>
				married <br />
				on <strong><h2><?php echo $user->wedate;?></h2></strong><br/></h1>
			</header>

		<!-- Main -->
			<div id="main">
				<!-- One -->
					<section id="one" >
						<header class="major" >
							<div class="row">
								<h2><?php echo $user->bname . ' ' . $user->bnamel . ' <a href=' . $user->bt . ' class="icon fa-twitter"><span class="label">Twitter</span></a><a href=' . $user->bfb . ' class="icon fa-facebook"><span class="label">Facebook</span></a>';?></h2>
								<p>
									<span class="image left avatar">
										<img src='userdata/<?php echo $user->email;?>/dpb.jpg' alt="" />
									</span>
<?php echo $user->aboutb;?>
								</p>
							</div>
							<div class="row">
								<h2><?php echo $user->gname . ' ' . $user->gnamel . ' <a href=' . $user->gfb . ' class="icon fa-twitter"><span class="label">Twitter</span></a><a href=' . $user->gt . ' class="icon fa-facebook"><span class="label">Facebook</span></a>';?></h2>
								<p>
									<span class="image left avatar">
										<img src='userdata/<?php echo $user->email;?>/dpg.jpg' alt="" />
									</span><?php echo $user->aboutg;?><br></p>
							</div>
						</header>
					</section>
					<!--RSVP-->
<?php
if ($today < $wdate) {
	echo "
					<section id='rsvp'>
						<h2>Are you Attending ?</h2>
						<form method='post' action='rsvp.php'>
								<div class='row uniform 50%'>
									<div class='6u 12u$(3)'>
										<input type='text' name='rsvp-name' id='demo-name' value='' placeholder='Name' />
									</div>
									<div class='6u$ 12u$(3)'>
										<input type='email' name='rsvp-email' id='demo-email' value='' placeholder='Email' />
									</div>
									<div class='12u$'>
										<ul class='actions'>
											<li><input type='submit' value='I am Attending' /></li>
										</ul>

									</div>
								</div>
							</form>
					</section>";} else {}
?>
<!-- Photo Gallery -->
<?php
if ($today > $wdate) {
	echo "
							<section id='two'>
								<h2>Photo Gallery</h2>
								<div class='row'>
									<article class='6u 12u$(3) work-item'>
										<a href='l/gal/images/w/1a.jpg' class='image fit thumb'><img src='l/gal/images/w/1a.jpg' alt='' /></a>
									</article>
									<article class='6u$ 12u$(3) work-item'>
										<a href='l/gal/images/w/3a.jpg' class='image fit thumb'><img src='l/gal/images/w/3a.jpg' alt='' /></a>
									</article>
									<article class='6u 12u$(3) work-item'>
										<a href='l/gal/images/w/4a.jpg' class='image fit thumb'><img src='l/gal/images/w/4a.jpg' alt='' /></a>
									</article>
									<article class='6u$ 12u$(3) work-item'>
										<a href='l/gal/images/w/5a.jpg' class='image fit thumb'><img src='l/gal/images/w/5a.jpg' alt='' /></a>
									</article>
									<article class='6u 12u$(3) work-item'>
										<a href='l/gal/images/w/7a.jpg' class='image fit thumb'><img src='l/gal/images/w/7a.jpg' alt='' /></a>
									</article>
									<article class='6u$ 12u$(3) work-item'>
										<a href='l/gal/images/w/9a.jpg' class='image fit thumb'><img src='l/gal/images/w/9a.jpg' alt='' /></a>
									</article>
								</div>
								<ul class='actions'>
									<li><a href='#' class='button'>Full Photo Album</a></li>
									<li><a href='#' class='button'>Videos</a></li>
								</ul>
							</section>
							";} else {}
?>
						<!-- Contact Us-->
					<section id="three">
						<h2>Get In Touch with PlanTheWed&reg;</h2>
						<div class="row">
							<div class="8u 12u$(2)">
								<form method="post" action="#">
									<div class="row uniform 50%">
										<div class="6u 12u$(3)"><input type="text" name="name" id="name" placeholder="Name" /></div>
										<div class="6u$ 12u$(3)"><input type="email" name="email" id="email" placeholder="Email" /></div>
										<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
									</div>
								</form>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
							<div class="4u$ 12u$(2)">
								<ul class="labeled-icons" style="color:white;">
									<li>
										<h3 class="icon fa-home"><span class="label">Address</span></h3>
										JIIT<br />
										Noida<br />
										United Pradesh
									</li>
									<li>
										<h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
										0987-443-cc56
									</li>
									<li>
										<h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
										<a href="#">support@planthewed.com</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
			</div>
		<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; Plan The Wed</li>
				</ul>
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				</ul>
			</footer>

	</body>
</html>