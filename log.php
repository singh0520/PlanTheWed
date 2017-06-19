<?php
                    error_reporting(0);
                    session_start();
                    include_once 'simple-php-captcha/simple-php-captcha.php';
                    $_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>PlanTheWed | Welcome</title>
    <link rel='stylesheet' href='css/foundation.css' />
    <link rel='stylesheet' type='text/css' href='css/index.css'>
    <script src='js/vendor/modernizr.js'></script>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <div class='header text-center'>
        <div class='row'>
            <div class='small-12 large-12 columns small-centered large-centered'>
                <h1><b>Plan The Wed</b></h1>
            </div><hr />
        </div>
    </div>
    <div class='row'>
        <div class='small-6 large-6 columns'>
            <div class="row">
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/planthewed" data-widget-id="541198115752001537">#planthewed Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
    </div>
        </div>
        <div class='small-6 large-6 columns right'>
            <div class='login-container'>
                <form id='loginform' action='login.php' method='POST'>
                    <input type='text' placeholder='Email' class='inputbox' name='email' />
                    <input type='password' name='password' placeholder='Password' class='inputbox' />
                    <input class='button' type='submit' value='Login'>
					<a href='#' data-reveal-id='myModal' class='success button right'>New ? - Register Now!</a>
                </form>
            </div>
        </div>
<hr />
    </div>
	<div class='row'>
	    <div id='myModal' class='reveal-modal' data-reveal>
	        <h3>SignUp</h3>
	        <form action='signup.php' id='signupform' method='POST'>
	            <div class='row'>
	                <div class='small-4 large-4 columns'>
	                        <input type='text' placeholder='Email' name='eid' />
	                </div>
	                <div class='small-4 large-4 columns'>
	                        <input type='password' placeholder='Password' name='password' />
	                </div>
	                <div class='small-4 large-4 columns'>
	                        <input type='password' placeholder='Re-enter Password' name='password1' />
	                </div>
	            </div>
	            <div class='row'>
	                <div class='small-4 large-4 columns'>
	                        <input type='text' placeholder="Bride's Name" name='BName' />
	                </div>
	                <div class='small-4 large-4 columns'>
	                        <input type='text' placeholder="Bride's Last Name" name='BNamel' />
	                </div>
	                <div class='small-4 large-4 columns'>
	                        <input type='text' name='wedate' placeholder='Date of Wedding : y/m/d' />
	                </div>
	            </div>
                 <div class='row'>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder="Groom's Name" name='GName' />
	                </div>
	                <div class='small-6 large-6 columns'>
	                        <input type='text' placeholder="Groom's Last Name" name='GNamel' />
	                </div>
	            </div>
                <div class='row'>
                    <div class='small-12 large-12 columns'>
                        <img src=<?php echo $_SESSION['captcha']['image_src'];?> alt="Captcha">
                        <input type="text" name="captcha-text" placeholder="Enter the letters in the image" />
                        <input class='button expand' type='submit' value='SignUp' />
                    </div>
                </div>
	        </form>
	        <a class='close-reveal-modal'>&#215;</a>
	    </div>
    </div>
    <div class="row">
        <div class="small-6 large-6 columns">
            <a href="https://twitter.com/planthewed" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @planthewed</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>
        </div>
        <div class="small-6 large-6 columns">
            <div class="fb-like-box" data-href="https://www.facebook.com/planthewed" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
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
    <!-- <script>(function($) {  
  
            var x = 0;  
            var y = 0;   
            var banner = $('body');    
            banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');   
            window.setInterval(function() {  
                banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');  
                x=x-1;  

  
            }, 50);  
  
})(jQuery);  </script> -->
</body>
</html>