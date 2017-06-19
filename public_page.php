<?php
error_reporting(0);
session_start();
require_once('connection.php');
include_once "classes/user.class.php";
$user = new user();
$user->email = $_SESSION['username'];//Controls Everything
$qry = "SELECT bName,gName,Wdate,bNamel,gNamel FROM login WHERE Email='$user->email'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$user->bname  =$row['bName'];
$user->gname  =$row['gName'];
$user->bnamel =$row['bNamel'];
$user->gnamel =$row['gNamel'];
$user->wedate =$row['Wdate'];
$qry = "SELECT aboutg , aboutb FROM aboutbg where Email = '$user->email'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$user->aboutg=$row['aboutg'];
$user->aboutb=$row['aboutb'];
?>
<!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>PlanTheWed | Home</title>
    <link rel='stylesheet' href='css/foundation.css' />
    <link rel='stylesheet' type='text/css' href='css/index.css' />
    <link rel='stylesheet' type='text/css' href='css/home.css' />
    <link rel="stylesheet" type='text/css' href="css/public_page.css" />
    <link rel="stylesheet" type='text/css' href="css/flippin.css" />
    <script src='js/vendor/modernizr.js'></script>
</head>
<body>
    <div class="banner" style="background:url(userdata/<?php echo $user->email;?>/bg.jpg) no-repeat center center;">
            <div class='header'>
                <div class='row'>
                    <div class='small-12 large-12 columns text-center'>
                        <h1>Plan The Wed</h1>
                    </div>
                </div>
            </div>
            <div class="contain-to-grid sticky text-center one-edge-shadow" data-start="opacity:0;margin-top:80px;"data-10p="opacity:1;margin-top:0px;">
                <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
                    <ul style="display:inline;" >
                        <a href=""><li style="font-size:25px;" class="name">Venue</li></a>
                        <li class="divider">|</li>
                        <a href="#slide-rsvp"><li style="font-size:25px;" class="name">RSVP</li></a>
                        <li class="divider">|</li>
                        <a href="#slide-wdft"><li style="font-size:25px;" class="name">Date &amp; Time</li></a>
                        <li class="divider">|</li>
                        <a href="#slide-au"><li style="font-size:25px;" class="name"><?php echo 'About '.$user->bname.' &amp '.$user->gname ;?></li></a>
                        <li class="divider">|</li>
                        <a href="#slide-pg"><li style="font-size:25px;" class="name">Photo Gallery</li></a>
                    </ul>
                </nav>
            </div>
        	<div id="slide-1" style="padding-bottom:20%;">
                <div class='row name-container'>
                    <div class='small-5 large-5 columns text-right'>
                        <div class='row'>
                            <div class='small-12 large-12 columns'>
                                <h1><?php echo $user->bname;?></h1>
                                <h1><?php echo $user->bnamel;?></h1>
                            </div>
                        </div>
                    </div>
                    <div class='small-2 large-2 columns text-center big-font'>
                        <span><h1>&amp;</h1></span>
                    </div>
                    <div class='small-5 large-5 columns'>
                        <div class='row'>
                            <div class='small-12 large-12 columns'>
                                <h1><?php echo $user->gname; ?></h1>
                                <h1><?php echo $user->gnamel;?></h1>
                              </div>
                        </div>
                    </div>
                    <div class="small-12 large-12 columns text-center big-font">
                    	<span><h1>Are Getting <br>Married ! <br> On</h1></span>
                    </div>
                    <div class="small-12 large-12 columns text-center">
                            <span><h1><?php echo $user->wedate;?></h1></span>
                    </div>
                </div>
            </div>
    </div>
        <div id="slide-au" style="padding-bottom:2%;padding-top:2%;">
        	<div class="row">
        		<div class='small-6 large-6 columns'>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <!-- front content -->
                                <a class='th [radius] right one-edge-shadow'>
                                    <img src='userdata/<?php echo $user->email;?>/dpb.jpg' width='200px' alt=''>
                                </a>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <div class='panel one-edge-shadow'>
                                    <p><?php echo $user->aboutb;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        		<div class='small-6 large-6 columns'>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <!-- front content -->
                                <a class='th [radius] right one-edge-shadow'>
                                    <img src='userdata/<?php echo $user->email;?>/dpg.jpg' width='200px' alt=''>
                                </a>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <div class='panel one-edge-shadow'>
                                    <p><?php echo $user->aboutg;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
        	</div>
        </div>
        <div id="slide-wdft" style="padding-bottom:5%;">
        	<!-- Wedding Date and Functions and Time -->
            <div class="row">
                <dl class="accordion shadow" data-accordion>
                    <dd class="accordion-navigation">
                       <a href="#panel1">Engagement</a>
                       <div id="panel1" class="content active">
                            <span>Date : 13tyh Ferbrauray <br>Time:12:00 PM</span>
                       </div>
                    </dd>
                    <dd class="accordion-navigation">
                       <a href="#panel2">Baby Event</a>
                       <div id="panel2" class="content">
                            <span>Date : 13tyh Ferbrauray <br>Time:12:00 PM</span>
                        </div>
                    </dd>
                    <dd class="accordion-navigation"> <a href="#panel3">Main Wedding Ceremony</a>
                        <div id="panel3" class="content">
                            <span>Date : 13tyh Ferbrauray <br>Time:12:00 PM</span>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
        <div id="slide-rsvp" style="background:url('assets/img/rsvp.jpg') no-repeat center center fixed;"
            data-anchor-target="#slide-rsvp" data-bottom-top="background-position: center 0px;"
            data-top-bottom="background-position: center -250px;">
            <!-- RSVP -->
            <div class="row">
                <div class="small-6 large-6 columns big-font large-centered" style="padding-top:5%;padding-bottom: 10%;">
                    <h1 class="text-center" style="color:white;padding-bottom:10%;">Are you <br>Attending ?</h1>
                    <form action="rsvp.php" method="post">
                        <input type="text" name="guestName" placeholder="Your Name" />
                        <input type="text" name="guestPlus" placeholder="Number of guests coming with you" />
                        <input type="submit" class="button expand" name="attendYes" value="I am attending" />
                    </form>
                </div>
            </div>
        </div>
        <div id="slide-pg">
            <!-- Wedding Photo Gallery -->
        </div>
    </div>
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