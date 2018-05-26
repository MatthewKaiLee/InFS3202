<?php 
session_start();
require("connectDatabaseObject.php");
if(isset($_GET["destination"]) && $_GET["destination"] != "") {
 $destination = $_GET["destination"];
 $sql_query = "SELECT Name, Description, ImageLocation, DestinationID FROM destination Where Name = ?";
 $stmt_object = $db_link -> prepare($sql_query);
 $stmt_object -> bind_param("s", $destination);
 $stmt_object -> execute();
 $result = $stmt_object -> get_result();
 if(!($row_result = $result -> fetch_row())) {
  die("Destination does not exist");
}
} else {
  die("Destination does not exist");
}
require("logout.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $row_result[0]; ?></title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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

    <div class="container destination">
      <ol class="breadcrumb breadco">
        <li><a href="index.php">Home</a></li>
        <li class="active"><?php echo $row_result[0]; ?></li>
      </ol>

      <h1 class="my-4"><?php echo $row_result[0]; ?>
      </h1>

      <div class="row">

        <div class="col-md-12">
          <?php 
            echo '<img class="img-fluid" src="'.$row_result[2].'"/>';
          ?>
        </div>

        <div class="col-md-12">
          <h3 class="my-3">Description</h3>
          <p><?php echo $row_result[1]; ?></p>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Packages</h3>

      
        <?php 
          $sql_query = "SELECT DestinationID, Name, ImageLocation FROM package Where DestinationID = \"".$row_result[3]."\"";
          $result -> close();
          $stmt_object = $db_link -> prepare($sql_query);
          $stmt_object -> execute();
          $result = $stmt_object -> get_result();
          $num_row = $result -> num_rows;
          $rows = 0;
          if($num_row % 3 == 0) {
            $rows = $num_row / 3;
          } else {
            $rows = $num_row / 3 + 1;
          }
          for($i = 0; $i < $rows; $i++) {
            echo "<div class=\"row\">";
            $item = 0;
            while ($item < 3 && $row_result = $result -> fetch_row()) {
              $item++;
              echo '<div class="col-md-4 col-sm-12 mb-4">
          <a href="package.php?package='.$row_result[1].'">';
          //echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $row_result[2] ).'"/>';
          echo '<img class="img-fluid" src="'.$row_result[2] .'"/>';
           echo ' </a>
           <a href="package.php?package='.$row_result[1].'"> <h5>'.$row_result[1].'</h5></a>

           </div>';
            }
            echo "</div>";
          }
        ?>
      
      <!-- /.row -->

    </div>
    <!-- /.container -->
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
<!-- //for bootstrap working -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
