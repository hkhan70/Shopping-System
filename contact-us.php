<?php
session_start();
require_once "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	     .myButton {
    -moz-box-shadow: 0px 10px 14px -7px #276873;
    -webkit-box-shadow: 0px 10px 14px -7px #276873;
    box-shadow: 0px 10px 14px -7px #276873;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
    background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
    background-color:#599bb3;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;
    border-radius:15px;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:17px;
    font-weight:bold;
    padding:4px 7px;
    text-decoration:none;
    text-shadow:0px 1px 0px #3d768a;
}
    </style>
</head><!--/head-->

<body>
	<?php 
require_once 'header.php' ;
 ?>

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">OUR-<strong>LOCATION</strong></h2> 

<!--/head-->
					  <div class="gmap_canvas"><iframe width="760" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Blue%20Area%20Islamabad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.gmap_canvas {margin-left: 16%;overflow:hidden;background:none!important;height:400px;width:100%;}</style>		    				
					
				</div>			 		
			</div>   
			<br><hr> 	
    		<div class="row">  	
	    		<div class="col-sm-12">
	    			<div class="contact-info">
	    				
	    				<address style="margin-left: 80%;">
	    					<h3 style="color: orange;">CONTACT INFO</h3>
	    					<p>E-Shopper Inc.</p>
							<p>Blue Area</p>
							<p>Islamabad Pakistan</p>
							<p>Mobile: +92 334 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>

	<?php 
require_once 'footer.php' ;
 ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>