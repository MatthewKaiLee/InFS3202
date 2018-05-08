<?php
	session_start();
	if(!isset($_SESSION["username"])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>register</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Queensland Travel Agency"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/register.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="js/register.js" type="text/javascript"></script>


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
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="index.php">Home</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="services.php">Services</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="gallery.php">Gallery</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="about.php">About</a></div>
				<?php
				if(!isset($_SESSION["username"])) {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"login.php\">Login</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"register.php\">Register</a></div>";
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


<div class="container register-form">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">Register</li>
			</ol>
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Change Information</p>
                    <form class="register" name="registerinfo" id="registerinfo" method="POST" action="" onSubmit="return checkValidRegister()">
                    	<input type="fname" name="fname" placeholder="First name"><div class="errMsg" name="errfname" id="errfname"></div>
                    	<input type="lname" name="lname" placeholder="Last name"><div class="errMsg" id="errlname"></div>
                    	<input type="username" onkeyup="checkExistName(this.value)" name="username" placeholder="Username" /><div class="errMsg" id="errusername"></div>
                    	<input type="password" name="password" placeholder="Password" /><div class="errMsg" id="errpassword"></div>
                    	<input type="password" name="confirmpassword" placeholder="ConfirmPassword" /><div class="errMsg" id="errconfirmpassword"></div>
                    	<input type="email" name="email" placeholder="Email" /><div class="errMsg" id="erremail"></div>
                    	<input type="submit" name="action" value="register" class="btn btn-success btn-sm" />
                    </form>
            </div>
        </div>
    </div>
</div>

<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Queensland Travel Agency</h3>
					<h4>mail@qta.com.au</h4>>
					<h4>(07) 3456 7890</h4>
					<!--<ul class="social-icons">
						<li><a href="#" class="p"></a></li>
						<li><a href="#" class="in"></a></li>
						<li><a href="#" class="v"></a></li>
						<li><a href="#" class="facebook"></a></li>
					</ul>-->
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Find out more</h3>					
					<ul>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="https://blog.queensland.com/">Blog</a></li>
						<li><a href="cart.html">Cart</a></li>
						<li><a href="order.html">Purchased Order</a></li>

					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Destination</h3>
					<ul>
						<li><a href="brisbane.html">Brisbane</a></li>
						<li><a href="goldcoast.html">Gold Coast</a></li>
						<li><a href="sunshinecoast.html">Sunshine Coast</a></li>
						<li><a href="cairns.html">Cairns<a/></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">		
			<p>Copyright &copy; 2017.UQ</p>					
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>