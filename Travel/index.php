<?php
	session_start();
	require("logout.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/youtube.js"></script>
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

<script src="js/googlep.js"></script>

<!-- //FlexSlider -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>




</head>
	
<body>
<?php 
	if(!isset($_SESSION["username"])) {
		echo "<div class=\"parallax\">
<div>
	<div class=\"container\">
		<div class=\"banner-info-grid\">
			<section class=\"slider\">
				<div class=\"flexslider\">
					<ul class=\"slides\">
						<li>
							<div class=\"banner-info\">
								<h1>Welcome To Queensland Travel Agency !</h1>
								<p>Queeensland Travel Agency is a company which provide luxury customize services for tourists. </p>
								<div class=\"more\">
									<a href=\"#logo\">Explore now</a>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
	</div>";
	}
?>

	<!-- header -->
	<div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">
			<a href="index.php" class="logo-image"><img class="logo-image-size" src="images/logo.jpg" id="logo" alt="logo"></a>
		</div>
			<?php
			if(isset($_SESSION["username"])) {
				echo "<div class=\"logo-right\" id=\"logo\">
							<ul>
								<li><a>".$_SESSION["username"]."</a></li>
							</ul>
						</div>";
			}
		?>
	</div>
		<div class="clearfix"> </div>

	<div class="container-fluid header-navigation" id="navbar" style="margin-bottom: 10px;">
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
<?php
	if(isset($_SESSION["username"])) {
		echo "<div class=\"banner\">
	<div class=\"container\">
		<div class=\"banner-info-grid\">
			<section class=\"slider\">
				<div class=\"flexslider\">
					<ul class=\"slides\">
						<li>
							<div class=\"banner-info\">
								<h1>Welcome To Queensland Travel Agency !</h1>
								<p>Queeensland Travel Agency is a company which provide luxury customize services for tourists. </p>
								<div class=\"more\">
									<a href=\"about.php\">Our Company</a>
								</div>
							</div>
						</li>
						<li>
							<div class=\"banner-info\">
								<h1>Have a nice preview of the Tourism Gallery !</h1>
								<p>Haven't decide where to go yet? Just have a quick look of the tourism gallery.</p>
								<div class=\"more\">
									<a href=\"gallery.php\">Tourism Gallery</a>
								</div>

							</div>
						</li>
						<li>
							<div class=\"banner-info\">
								<h1>Choose your favourite package now !</h1>
								<p>Check the popular package or services and planning your memorable experiences. </p>
								<div class=\"more\">
									<a href=\"services.php\">Our Services</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>";
	}
?>

<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom container" id="destination">
		<h3>Choose your favour destination Today !</h3>

		<div class="container">

			<iframe class="col-md-8 col-md-offset-2 mt-4 col-sm-10 col-sm-offset-2"  id="frame" width="480px" height="360px" src="https://www.youtube.com/embed/TMEdbG7G2tM" frameborder="0" allowfullscreen></iframe>	
			<div class="col-md-8 col-md-offset-2 mb-3 mt-4 col-sm-8 col-sm-offset-2 ">
			<div class="col-md-4 col-md-offset-2 ">Please choose your place:</div>
				<select name="places" id="place">
					<option value="Queensland">Queensland</option>
					<option value="Brisbane">Brisbane</option>
					<option value="Gold Coast">Gold Coast</option>
					<option value="Sunshine Coast">Sunshine Coast</option>
					<option value="Carins">Carins</option>
				</select>
				<button class="" type="action" value="search" onclick="getSelectedPlace()">video</button>
			</div>
			
		</div>


		<div class="container">

			<div id="map" style="height: 400px; width: 100%;" class="col-md-12 mt-3 mb-4"></div>
			<div class="col-md-8 col-md-offset-2 mb-3 mt-4 col-sm-8 col-sm-offset-2 ">
			<div class="col-md-4 col-md-offset-2 ">Please choose your place:</div>
			<input type="place" name="place" id="Googleplace">
				<button class="" type="action" value="search" onclick="getSearchPlace()">Find</button>
			</div>
			
		</div>
		
		<div class="container">
	      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item col-lg-offset-1 col-md-offset-1 col-sm-offset-1 mt-4">
          <div class="card h-100">
            <a href="destination.php?destination=Brisbane"><img class="card-img-top" src="images/brisbane.jpg" alt="Brisbane"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="destination.php?destination=Brisbane">Brisbane<div id="weather1"></div></a>
              </h4>
              <p class="card-text">Combine art and outdoor adventure in Brisbane, where creative spaces, music and hip new restaurants meet pretty riverside gardens and man-made beaches.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item mt-4">
          <div class="card h-100">
            <a href="destination.php?destination=Gold Coast"><img class="card-img-top" src="images/goldcoast.jpg" alt="Gold Coast"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="destination.php?destination=Gold Coast">Gold Coast<div id="weather2"></div></a>
              </h4>
              <p class="card-text">The Gold Coast's star attraction is its beaches, including the world-renowned stretch of sand at Surfers Paradise. Beyond the beaches, discover laid-back neighbourhoods, a booming culinary scene and the Gold Coast's famous theme parks.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item col-lg-offset-1 col-md-offset-1 col-sm-offset-1 mt-4">
          <div class="card h-100">
            <a href="destination.php?destination=Sunshine Coast"><img class="card-img-top" src="images/sunshinecoast.jpg" alt="Sunshine Coast"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="destination.php?destination=Sunshine Coast">Sunshine Coast<div id="weather3"></div></a>
              </h4>
              <p class="card-text">Stretching from the coastal city of Caloundra, near , to the Great Sandy National Park in the north, the Sunshine Coast is home to pretty villages, renowned surf spots and spectacular rural hinterland.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item mt-4">
          <div class="card h-100">
            <a href="destination.php?destination=Cairns"><img class="card-img-top" src="images/cairns.jpg" alt="Cairns"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="destination.php?destination=Cairns">Cairns<div id="weather4"></div></a>
              </h4>
              <p class="card-text">Visit Cairns for the Great Barrier Reef and Wet Tropics World Heritage Rainforest, but don't miss the great things to do in and around town. You'll find brilliant cafés, bustling markets and plenty of beaches nearby. Relax by a resort pool or spend your days exploring this tropical oasis.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--container-->
</div>

<!-- //welcome-bottom -->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Queensland Travel Agency</h3>
					<h4>mail@qta.com.au</h4>>
					<h4>(07) 3456 7890</h4>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Find out more</h3>					
					<ul>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="https://blog.queensland.com/">Blog</a></li>
					</ul>
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


		<script>
    

    function makeRequest(city, selector) {
  xhr = new XMLHttpRequest();

  xhr.onload = function() {
    var response = JSON.parse(this.responseText);
    var city = response.city.name + ", " + response.city.country;
    var weatherTitle = response.list[0].weather[0].main;
    var temp = response.list[0].main.temp + "°";

    var weatherContainer = document.querySelector(selector);
    weatherContainer.innerHTML = weatherTitle + "   " + temp;
    
  };
  xhr.open(
    "GET",
    "https://api.openweathermap.org/data/2.5/forecast?q="+city+"&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric",
    true
  );
  xhr.send();
}
   var place = ["Brisbane,au", "Gold Coast,au", "Sunshine Coast,au", "Cairns,au"];
   var selector = ["#weather1","#weather2","#weather3","#weather4"];
for(var i = 0; i < 4; i++) {
	makeRequest(place[i],selector[i]);
}


  </script>

	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwQeUa5F6g3oYRVZvOcx1PtmvKE0CAZ2o&callback=initMap">
    </script>
<!-- //for bootstrap working -->
</body>
</html>