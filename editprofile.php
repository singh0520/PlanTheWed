<?php
    error_reporting(0);
?><!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Edit your Public Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='css/foundation.css' />
    <link rel='stylesheet' type='text/css' href='css/index.css'>
    <script src='js/vendor/modernizr.js'></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home.php">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Edit Your Profile</h1>
                        <h3>Create your Wedding your Own way</h3>
                        <hr class="full-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href='#' data-reveal-id='myModal' class="btn btn-default btn-lg">Change your password</a>
                            </li>
                            <li>
                                <a href='#' data-reveal-id='myModal1' class="btn btn-default btn-lg">Change your venue</a>
                            </li>
                            <li>
                                <a href='#' data-reveal-id='myModal2' class="btn btn-default btn-lg">Change your date</a>
                            </li>
                        </ul>
                        <hr class="full-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href='#' data-reveal-id='myModal3' class="btn btn-default btn-lg">Change Couple image</a>
                            </li>
                            <li>
                                <a href='#' data-reveal-id='myModal4' class="btn btn-default btn-lg">Change Bride's picture</a>
                            </li>
                            <li>
                                <a href='#' data-reveal-id='myModal5' class="btn btn-default btn-lg">Change Groom's Pictures</a>
                            </li>
                        </ul>
                        <hr class="full-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href='#' data-reveal-id='myModal6' class="btn btn-default btn-lg">Edit Bride's Info</a>
                            </li>
                            <li>
                                <a href='#' data-reveal-id='myModal7' class="btn btn-default btn-lg">Edit Groom's Info</a>
                            </li>
                            <li>
                                <a href='#' data-reveal-id='myModal8' class="btn btn-default btn-lg">Edit Social Links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div class='row'>
	    <div id='myModal' class='reveal-modal' data-reveal>
	        <h3>Change Your Password</h3>
	        <form action='pass.php'  method='POST'>
	                <div class='small-4 large-4 columns'>
	                        <input type='password' placeholder='Old Password' name='old' />
	                </div>
	                <div class='small-4 large-4 columns'>
	                        <input type='password' placeholder='New Password' name='new1' />
	                </div>
	                <div class='small-4 large-4 columns'>
	                        <input type='password' placeholder='Re-enter New Password' name='new2' />
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

    <div class='row'>
	    <div id='myModal1' class='reveal-modal' data-reveal>
	        <h3>Change Your Venue</h3>
	        <form action='venue.php'  method='POST'>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder='New Venue' name='ven' />
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

    <div class='row'>
	    <div id='myModal2' class='reveal-modal' data-reveal>
	        <h3>Change Your Date</h3>
	        <form action='date.php'  method='POST'>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder='New Date' name='date' />
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

    <div class='row'>
	    <div id='myModal3' class='reveal-modal' data-reveal>
	        <h3>Change Couple Picture</h3>
	        <form action='upload1.php'  method='POST' enctype="multipart/form-data">
	                <div class='small-6 large-6 columns'>
	                       <input type="file" name="fileToUpload" id="fileToUpload">
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

    <div class='row'>
	    <div id='myModal4' class='reveal-modal' data-reveal>
	        <h3>Change Bride's Picture</h3>
	        <form action='upload2.php'  method='POST' enctype="multipart/form-data">
	                <div class='small-6 large-6 columns'>
	                       <input type="file" name="fileToUpload" id="fileToUpload">
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

    <div class='row'>
	    <div id='myModal5' class='reveal-modal' data-reveal>
	        <h3>Change Groom's Picture</h3>
	        <form action='upload3.php'  method='POST' enctype="multipart/form-data">
	                <div class='small-6 large-6 columns'>
	                       <input type="file" name="fileToUpload" id="fileToUpload">
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

     <div class='row'>
	    <div id='myModal6' class='reveal-modal' data-reveal>
	        <h3>Edit Bride's Info</h3>
	        <form action='binfo.php'  method='POST'>
	                <div class='small-6 large-6 columns'>
	                        <textarea name="binfo" placeholder="About the Bride" rows="10" cols="60"></textarea>
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

        <div class='row'>
	    <div id='myModal7' class='reveal-modal' data-reveal>
	        <h3>Edit Groom's Info</h3>
	        <form action='ginfo.php'  method='POST'>
	                <div class='small-6 large-6 columns'>
	                        <textarea name="ginfo" placeholder="About the Grooms" rows="10" cols="60"></textarea>
	                </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>

    <div class='row'>
	    <div id='myModal8' class='reveal-modal' data-reveal>
	        <h3>Edit Social Links</h3>
	        <form action='links.php'  method='POST'>
	                <div class='row'>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder="Bride's FB Link" name='bfb' />
	                </div>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder="Bride's Twitter Link" name='bt' />
	                </div>
	            </div>
	            <div class='row'>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder="Groom's FB Link" name='gfb' />
	                </div>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder="Groom's Twitter LInk" name='gt' />
	                </div>
	            </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <input class='button expand' type='submit' value='Submit' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
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
    <script>(function($) {
            var x = 0;
            var y = 0;
            var banner = $('#banner');
            banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');
            window.setInterval(function() {
                banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');
                x--;
            }, 50);

})(jQuery);</script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
