<?php 
session_start();
/*require("connectdatabase.php");
$seldb = @mysqli_select_db($db_link, "infs3202");
if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])) {
	if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"]!="" && $_POST["password"] != "") {
		$username= $_POST["username"];
		$sql_query = "SELECT username, password FROM customer Where username = '".$username."'";
		echo $sql_query;
		$result = mysqli_query($db_link, $sql_query);
		echo "<br>";
		if($row_result = mysqli_fetch_row($result)) {
			if($row_result[0] == $_POST["username"] && $row_result[1] == $_POST["password"]) {
				$_SESSION["username"] = $username;

				header("Location: index.php");
			} else {
				header("Location: login.php");
			}
		} else {
			header("Location: login.php");
		}

	}
}*/

	require("connectDatabaseObject.php");
	if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])) {
		if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"]!="" && $_POST["password"] != "") {
			$username= $_POST["username"];
			$sql_query = "SELECT username, password FROM customer Where username = ?";
			$stmt_object = $db_link -> prepare($sql_query);
			$stmt_object -> bind_param("s", $username);
			$stmt_object -> execute();
			$result = $stmt_object -> get_result();
			if ($row_result = $result -> fetch_row()) {
				//echo "res1 ".$row_result[0]." res2 ".$row_result[1]."<br>";
				if(password_verify($_POST["password"],$row_result[1])) {
					$_SESSION["username"] = $username;
					//header("Location: index.php");
				}
			}
		}
	}
	if(isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
		unset($_SESSION["username"]);
		header("Location: logout.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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

<link href="css/login.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/login.js"></script>
<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>




</head>
	
<body>
	<!-- header -->
	<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">
		<a href="index.html" class="logo-image"><img class="logo-image-size" src="images/logo.jpg" alt="logo"></a>
	</div>
	<?php
			if(isset($_SESSION["username"])) {
				echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"padding-top:20px;\"><a>".$_SESSION["username"]."</a></div>";
			}
	?>
	</div>
	<div class="clearfix"> </div>
	<div class="container-fluid header-navigation" style="margin-bottom: 10px;">
		<div class="navigationbar navigationbar-default">
			<div class="row navigation navigationbar-nav">
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="index.html">Home</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="services.html">Services</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="gallery.html">Gallery</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="about.html">About</a></div>
				<?php
				if(!isset($_SESSION["username"])) {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"login.html\">Login</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"register.html\">Register</a></div>";
				} else {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"login.html\">Profile</a></div>
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
			

<div class="container login-form">
	<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">Login</li>
			</ol>
    <div class="row">
        <div class="col-md-12">

            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                    <form class="login" method="POST" action="login.php">
                    	<input type="text" name ="username" id="username" placeholder="Username" />
                    	<input type="password" name="password" id="password" placeholder="Password" />
                    	<input type="submit" value="Sign In" class="btn btn-success btn-sm" />
                    	<div class="remember-forgot">
                    		<div class="row">
                    			<div class="col-md-6 col-xs-6 ">
                    				<div class="checkbox">
                    					<label>
                    						<input type="checkbox" />
                    						Remember Me
                    					</label>
                    				</div>
                    			</div>
                        <!--<div class="col-md-6 col-xs-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                        </div>-->
                    </div>
                </div>
            </form>
            </div>
            <!--<div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>-->

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
			<p>Copyright &copy; 2018.UQ</p>	
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>