<?php
  session_start();
  require("connectDatabaseObject.php");
  if(isset($_GET["package"]) && $_GET["package"] != "") {
    $sql_query = "SELECT `package`.`Name`, `package`.`Description`, `package`.`ImageLocation`, Price, Stock FROM package Where `package`.`Name` = ?";
    $stmt_object = $db_link -> prepare($sql_query);
    $stmt_object -> bind_param("s", $_GET["package"]);
    $stmt_object -> execute();
    $result = $stmt_object -> get_result();
    if(!($row_result = $result -> fetch_row())) {
      die("Package does not exist");
    }
  } else {
    die("Package does not exist");
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

    <title><?php echo $row_result[0];?></title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css"/>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

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

    <!-- Page Content -->
    <div class="container package">
      <ol class="breadcrumb breadco">
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li class="active"><?php echo $row_result[0];?></li>
      </ol>

      <div class="row">

        <div class="col-lg-12 col-md-12">
          <h2><?php echo $row_result[0];?></h2>
        </div>

        <div class="col-lg-12">

          <div class="card mt-4">
            <?php echo '<img class="card-img-top img-fluid" style="height:100%; width:100%;" src="'.$row_result[2].'"/>';?>
            <div class="card-body">
              <h3 class="card-title"><?php echo $row_result[0];?></h3>
              <h4>$<?php echo $row_result[3];?></h4>
              <p class="card-text"><?php echo $row_result[1];?></p>
              
            </div>
            <div class="card-body">
              <div class="col-md-12">
              <?php
                
                if($row_result[4] <= 0) {
                  //echo "<div style=\"color:red;\">Out of Stock</div>";
                } else {
                  //echo "<form method=\"GET\" action=\"addItem.php\">";
                  /*echo '<select id="number" name="number" style="overflow-y :auto; overflow-x:hidden; width:200px;">';
                  echo "<option value=\"0\">- Please select number -</option>";
                  for($i = 1; $i <= $row_result[4]; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                  }
                  echo "</select>";*/
                  //echo "<button onclick=\"window.location.href=\"cart.php\"\" class=\"btn btn-success\" name=\"place\" value=\"".$row_result[0]."\">Add to Cart</button>";
                  echo '<a class="col-md-2 col-md-offset-10" href="pdfg.php?package='.$row_result[0].'"">Print PDF</a>';
                  echo '<form class="col-md-2 col-md-offset-10 mt-4" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PDN3WWU2CGMWA">
<input type="image" src="https://www.sandbox.paypal.com/en_AU/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>';
                 // echo "</form>";
                }
              ?>
              </div>
              
            </div>
          </div>
          <!-- /.card -->


       

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

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
<!-- //for bootstrap working -->


  </body>

</html>
