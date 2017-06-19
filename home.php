<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PlanTheWed | Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home1.css" rel="stylesheet">
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="demo1.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
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
                        <h1>Welcome</h1>
                        <h3>Ready to Plan Your Wedding?</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="public_page3.php" class="btn btn-default btn-lg">Public Page</a>
                            </li>
                            <li>
                                <a href="services.php" class="btn btn-default btn-lg">Services</a>
                            </li>
                            <li>
                                <a href="editprofile.php" class="btn btn-default btn-lg">Edit Profile</a>
                            </li>
                            <li>
                                <a href="todo.html" class="btn btn-default btn-lg">ToDo</a>
                            </li>
                        </ul>
                        <br><h3>ToDo Completion</h3>
                        <div id="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background:#7a6346;color:white;">
        <div class="col-lg-3"><br>Check out the Cheapest Flights<div id="mmd-flight-widget"></div></div>
        <div class="col-lg-9">
            <br>Check Gold Prices to buy gold at the right time
            <iframe
            src="https://www.goldbroker.com/widget/iframe/live/XAU/320?currency=INR"
            width='100%' height="320" style="border: 0; overflow:
            hidden;">
        </iframe>
    </div>
</div>
<!-- ProgressBar -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function() {
        if (window.XMLHttpRequest)
            xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","gettodo.php?q="+"demouser",true);
        xmlhttp.send();
        var datat = <?php echo json_encode($_SESSION['progress']); ?>;
        $( "#progressbar" ).progressbar({
            value: datat
        });
    });
</script>
<!-- Flight -->
<script type="text/javascript">(function initWidget() {
    var options = { 
        layout: {   
            theme: "momondo"
            , width: "300"  
            , height: "250" 
        },                  
        airports: {         
            origin: "", 
            destination: "" 
        },                  
        settings: {         
            openNewWindow: true,    
            domain: "www.momondo.com",      
            source: ""          
        }                               
    };                                  
    var settings = options.settings;    
    var airports = options.airports;    
    var layout = options.layout;        
    var encoding = null;                
    onWidgetLoad = function (f)         
    {                                   
        f("mmd-flight-widget", {        
            searchForms: [{             
                type: 1,                
                searchURL: "http://[DOMAIN][PATH][QUERY]" + (!!settings.source ? "&source=" + settings.source : ""),    
                openNewWindow: settings.openNewWindow,              
                currency: settings.currency,                        
                segments: [                                         
                {                                               
                    airports: [                                 
                    { code: airports.origin || "" },        
                    { code: airports.destination || "" }    
                    ]                                           
                },                                              
                {                                               
                    airports: [                                 
                    { code: airports.destination || "" },   
                    { code: airports.origin || "" }         
                    ]   
                }       
                ]           
            }]              
        });                 
};                      
var scr = document.createElement("script");                     
scr["src"] = "http://" + settings.domain + "/widgets/searchform?dimensions=" + layout.width + "x" + layout.height + "&types=1&callback=onWidgetLoad&theme=" + layout.theme; 
var tag = document.getElementsByTagName("head");    
if (tag && tag.length)      
{                           
    tag = tag[0];           
    tag.appendChild(scr);   
}                           
})();
</script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
