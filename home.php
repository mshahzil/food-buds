<!DOCTYPE html>
<html lang="en">
  
  <!--head tag-->
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!--supports Edge version of Internet Explorer only--> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!--prevents mobile devices from zooming out automatically-->
    <title>Food Buds</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  <!--default bootstrap css styles--> 
    <link rel="stylesheet" href="css/styles-home.css">         <!--our own css styles that will override the default styles-->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"> <!--import font Oxygen-->
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">  <!--import font Lora-->
  </head>
  
  <!-- BODY -->
  <body>

    <!-- HEADER -->
    <header> 
      <nav id="header-nav" class="navbar navbar-default">  <!--navigation bar inside header-->
        <div class="container">  <!--container inside navigation bar-->
          <div class="navbar-header">  <!-- navbar header inside container; holds ALL the contents of the header-->

            <div class = "navbar-brand">  <!--navbar brand; contains the name of the brand-->
              <a href="home.php"><h1>FOOD BUDS</h1></a>  <!--clickable brand name-->
            </div>

            <!--button that shows up when the browser contracts; a menu drops down when you click on it-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav"
            aria-expanded="false">  
              <span class="sr-only">Toggle navigation</span>  <!-- screen reader only; never show on browser -->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>  <!-- End of .navbar-header -->

          <!-- List of icons (Cart, Login, Contact Us, About Us) -->
          <div id="collapsable-nav" class="collapse navbar-collapse">
            <ul id="nav-list" class="nav navbar-nav navbar-right">
              <li class="visible-xs">
                <a href="home.php"><span class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li>
                <a href=""><span class="glyphicon glyphicon-shopping-cart"></span><br class="hidden-xs">Cart</a>
              </li>
              <?php
              session_start();
              if(isset($_SESSION['is_login'])){
              echo '<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span><br class="hidden-xs">Logout</a></li>';

              }else{
              echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span><br class="hidden-xs">Login</a></li>';
              }
              ?>
              <li>
                <a href="home.php#contact-us"><span class="glyphicon glyphicon-earphone"></span><br class="hidden-xs">Contact Us</a>
              </li>
              <li>
                <a href="home.php#about-us"><span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">About Us</a>
              </li>
            </ul>
          </div> <!-- End of #collapsable-nav -->
        </div>  <!-- End of .container -->
      </nav>  <!-- End of #header-nav -->
    </header>

    <!-- Call button to be displayed on extra small devices only -->
    <div id="call-btn" class="visible-xs">
      <a href="tel:111-222-333" class="btn"><span class = "glyphicon glyphicon-earphone"></span> 111-222-333</a>
    </div>



    <!-- MAIN CONTENT -->
    <div>
      <div class="container">
        <div class="jumbotron">
          <img src="images/jumbotron-new-768.jpg" alt="Picture of Restaurant" class="img-responsive visible-xs">
        </div>
      </div>
    </div>

    <div>
      <div class="container">
        <!-- HOME TILES -->
        <div id="home-tiles" class="row">

          <!-- SEARCH BY INGREDIENTS TILE -->
          <div class="col-md-6 col-sm-6 col-12">
            <a href="search-by-ingredients.php"><div id="ingredients-tile"><span>Search Recipes By Ingredients</span></div></a>
          </div>

          <!-- SEARCH BY CATEGORY TILE -->
          <div class="col-md-6 col-sm-6 col-12">
            <a href="search-by-category.php"><div id="category-tile"><span>Search Recipes By Category</span></div></a>
          </div>
        
        </div>  <!-- End of #home-tiles -->
      </div>
    </div>

    <div>
      <div class="container">
        <div id="login-row" class="row">
          <!-- LOG-IN BUTTON -->
          <a href="login.php" class="col-md-6">LOG IN</a>
          <!-- SIGN-UP BUTTON -->
          <a href="signup.php" class="col-md-6">SIGN UP</a>
        </div>
      </div>
    </div>
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <footer class="panel-footer">
      <div class="container">
        <div class="row">

          <section id="contact-us" class="col-sm-6">
            <span>Contact Us</span><br>
            Phone No: 111-222-333<br>
            Email: <a href="mailto: foodbuds@gmail.com" id="footer-email">foodbuds@gmail.com</a><br>
            <hr class="visible-xs">
          </section>

          <section id="about-us" class="col-sm-6">
            <span>About Us</span><br>
            <p>We are a Software Engineers duo who love<br> innovation and food!<br></p>     
            <hr class="visible-xs">
          </section>

        </div> <!-- End of .row -->

        <div class="text-center">&copy; 2020 Food Buds, All Rights Reserved.</div>
      </div>  <!-- End of .container -->
    </footer>

    <script src="js/jquery-2.1.4.min.js"></script>  <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="js/bootstrap.min.js"></script>     <!--default bootstrap JavaScript-->
    <script src="js/script.js"></script>            <!--our own JavaScript that will override the default JavaScript-->
  </body>

</html>