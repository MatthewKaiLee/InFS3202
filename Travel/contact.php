<?php 
	session_start();
	require("connectDatabaseObject.php");
	require("sendEmail.php");
	require("logout.php");

	if(isset($_POST["action"]) && $_POST["action"] == "Send" && isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["message"]) && $_POST["message"] != "") {
		sendMail($_POST["email"], $_POST["name"]);
		header("Location: contact.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seafaring Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/map.js"></script>
<!-- //js -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!--Calendar-->
<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
		<script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />
		<script type="text/javascript" src="./js/app.js"></script>
		<link rel="stylesheet" href="./css/app.css" type="text/css" />

<!--Calendar-->
</head>
	
<body>
<!-- header -->
	<div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">
			<a href="index.php" class="logo-image"><img class="logo-image-size" src="images/logo.jpg" alt="logo"></a>
		</div>
			<?php
			if(isset($_SESSION["username"])) {
				echo "<div class=\"logo-right\">
							<ul>
								<li><a>".$_SESSION["username"]."</a></li>
							</ul>
						</div>";
			}
		?>
	</div>
		<div class="clearfix"> </div>

	<div class="container-fluid header-navigation" style="margin-bottom: 10px;">
		<div class="navigationbar navigationbar-default">
			<div class="row navigation navigationbar-nav">
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 top-nav"><a href="index.php">Home</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 top-nav"><a href="services.php">Services</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 top-nav"><a href="gallery.php">Gallery</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 bot-nav"><a href="about.php">About</a></div>
				<?php
				if(!isset($_SESSION["username"])) {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4 bot-nav\"><a href=\"login.php\">Login</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4 bot-nav\"><a href=\"register.php\">Register</a></div>";
				} else {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"profile.php\">Profile</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"index.php?logout=true\">Logout</a></div>";
				}
				?>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner1">
	</div>
<!-- //banner -->
<!-- contact -->
<div class="contact about">
		<div class="contact-grids">
			<div class="container">
				<ol class="breadcrumb breadco">
					<li><a href="index.php">Home</a></li>
					<li class="active">Contact Us</li>
				</ol>

				<div class="col-md-12 about-grid mb-3">
					<h3>Our Branch</h3>
				</div>
				<div class="container mt-4">
					<div id="map" style="height: 400px; width: 100%;" class="col-md-12 mt-3 mb-4"></div>
				</div>
				
				<br>
				<div class="container mt-3 mb-4">
				<div class="row">
					<div class="col-md-3 contact-grid col-md-offset-2">
						<div class="call">
							<div class="col-xs-3 contact-grdl">
								<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							</div>
							<div class="col-xs-9 contact-grdr">
								<h4>(07) 3456 7890</h4>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address">
							<div class="col-xs-3 contact-grdl">
								<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
							</div>
							<div class="col-xs-9 contact-grdr">
								<ul>
									<h4>123 Fake Street, Brisbane City.</h4>	
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail">
								<div class="col-xs-3 contact-grdl">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
								<div class="col-xs-9 contact-grdr">
									<h4>mail@qta.com.au</h4>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-5 contact-grid">
							<form method="POST">
								<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<textarea type="text" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
								<input type="submit" name="action" value="Send" >
							</form>
						</div>
					</div>
				</div>



					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
<!-- contact -->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Queensland Travel Agency</h3>
					<ul style="color: #868686;font-size:14px;text-decoration: none;font-family: 'Open Sans', sans-serif;list-style-type:none;">
            			<li>mail@qta.com.au</li>
            			<li>(07) 3456 7890</li>
          			</ul>
					<h3>Find out more</h3>					
					<ul>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="https://blog.queensland.com/">Blog</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<div id="calendar">
         
        </div>
				</div>
        <div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
          <h3>Destination</h3>
          <ul>
            <li><a href="destination.php?destination=Brisbane">Brisbane</a></li>
            <li><a href="destination.php?destination=Gold Coast">Gold Coast</a></li>
            <li><a href="destination.php?destination=Sunshine Coast">Sunshine Coast</a></li>
            <li><a href="destination.php?destination=Cairns">Cairns<a/></li>
          </ul>
        </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">		
			<p>Queensland Travel Agency &copy; QTA 2018. All rights reserved.</p>					
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwQeUa5F6g3oYRVZvOcx1PtmvKE0CAZ2o&callback=initMap">
    </script>
<!-- //for bootstrap working -->
</body>
</html>