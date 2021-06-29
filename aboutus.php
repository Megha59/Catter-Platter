<!DOCTYPE html>
<html>
<head>
  <title>about</title>
</head>
<body>
<?php
session_start();
?>

<html>

  <head>
    <title> About | Sahmeg </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Sahmeg</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <!-- CONTENT
=================================-->
<div class="container-full-bg" style="background-image: url('https://cdn.shopify.com/s/files/1/2083/7711/files/bonding-1985863.jpg?7305656213290828124'); box-shadow: inset 0 0 0 2000px rgba(0,0,0,0.6);">
    <div class="container special">
        <div class="jumbotron"><span class="fwbg-title"> We'll try to do our best!! </span>
            <div class="headline-container">
                <div class="row">
                    <div class="col-xs-12"><span class="fwbg-callout"> </span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /header container-->
<!-- CONTENT
=================================-->
<div class="container" style="max-width: 1200px;">
    <div class="row">
        <div class="col-xs-12" style="text-align:center;">
            <h2>– About Us –</h2></div>
        <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="info-text">
                <p>Looking for a perfect food affair to complement your special occasion?
Look no further! Sahmeg Caterers provide a sumptuous food itinerary to fulfill your each and every catering need. Be it a large, mid or small sized event, our full-range of outdoor and indoor catering services cover complete food preparation and presentation for formal and informal gatherings.</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6">
            <div class="col-xs-12">
                <figure class="snip1374"><a href="#"><img src="images/about2.jpg" alt="sample66" /></a></figure>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-6 col-md-push-6">
                <div class="info-text right">
                    <p>From an array of food items to choose from, Gala Caterers bring to you the best from all cuisines to suit your event, tastes and pockets even. So while you leave your food worries to us, we let you enjoy those special moments in all the glory. So let the celebrations begin!!</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-6 col-md-pull-6">
                <div class="col-xs-12 col-sm-12">
                    <figure class="snip1374"><a href="#"><img src="images/about.jpg" alt="sample57" /></a></figure>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr>
        <div class="row">
            <div class="col-xs-12" style="text-align:center;padding-top:25px;">
                <h3 style="padding-bottom:10px;text-transform:uppercase;">Contact us today for:</h3>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <figure class="snip0078 blue"><img src="images/cust.jpg" alt="sampl45" />
                        <figcaption>
                            <h2>Various <span> Cuisines</span></h2>
                        </figcaption>
                        <a href="#"></a></figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <figure class="snip0078 red"><img src="images/startpage.jpg" alt="sample50" />
                        <figcaption>
                            <h2>Budget Friendly <span>Platters</span></h2>
                        </figcaption>
                        <a href="#"></a></figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <figure class="snip0078 yellow"><img src="images/cust2.jpg" alt="sample46" />
                        <figcaption>
                            <h2>Customized <span> Platters</span></h2>
                        </figcaption>
                        <a href="#"></a></figure>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
         </body>
</html>