<!DOCTYPE html>
<html lang="en">
  
  <!--head tag-->
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!--supports Edge version of Internet Explorer only--> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!--prevents mobile devices from zooming out automatically-->
    <title>Search By Category</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  <!--default bootstrap css styles--> 
    <link rel="stylesheet" href="css/styles-category.css">         <!--our own css styles that will override the default styles-->
    <link rel="stylesheet" href="css/styles-login.css">         <!--our own css styles that will override the default styles-->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"> <!--import font Oxygen-->
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">  <!--import font Lora-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
  </head>
  
  <!-- BODY -->
  <body>

    <!-- HEADER -->
    <header> 
      <nav id="header-nav" class="navbar navbar-default">  <!--navigation bar inside header-->
        <div class="container">  <!--container inside navigation bar-->
          <div class="navbar-header">  <!-- navbar header inside container; holds ALL the contents of the header-->
            
            <!-- <a href="index.html" class="pull-left visible-md visible-lg">  link for logo / logo floated to the left / logo disappears when browser contracts 
              <div id="logo-img" ></div>  logo image
            </a> -->

            <div class = "navbar-brand">  <!--navbar brand; contains the name of the brand-->
              <a href="home.php"><h1>FOOD BUDS</h1></a>  <!--clickable brand name-->
             <!--  <p>
                <img src="images/star-k-logo.png" alt="Kosher Certification">  
                <span>Kosher Certified</span>    
              </p> -->
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

          <!-- List of icons (Menu, About, Awards, Phone number) -->
          <div id="collapsable-nav" class="collapse navbar-collapse">
            <ul id="nav-list" class="nav navbar-nav navbar-right">
              <li class="visible-xs">
                <a href="home.php"><span class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li>
                <a href="menu-categories.html"><span class="glyphicon glyphicon-shopping-cart"></span><br class="hidden-xs">Cart</a>
              </li>
              <li>
                <a href="login.php"><span class="glyphicon glyphicon-user"></span><br class="hidden-xs">Login</a>
              </li>
              <li>
                <a href="home.php#contact-us"><span class="glyphicon glyphicon-earphone"></span><br class="hidden-xs">Contact Us</a>
              </li>
              <li>
                <a href="home.php#about-us"><span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">About Us</a>
              </li>
              <!-- <li id="phone" class="hidden-xs">
                <a href="tel:410-602-5008"><span>410-602-5008</span></a>
                <div>* We deliver</div>
              </li> -->
            </ul>
          </div> <!-- End of #collapsable-nav -->
        </div>  <!-- End of .container -->
      </nav>  <!-- End of #header-nav -->
    </header>

    <!-- Call button to be displayed on extra small devices only -->
    <div id="call-btn" class="visible-xs">
      <a href="tel:410-602-5008" class="btn"><span class = "glyphicon glyphicon-earphone"></span>410-602-5008</a>
    </div>
    <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>

<!--sign up form-->
    <div class="container-fluid">
    <h1 class="text-center login-head">User Log In Form</h1>
    <form  id="log-form" action="logUser.php" method="post" name="form2" style="width:40%; margin:0 auto; color:black">
        <div class="form-group">
            <i class="fas fa-envelope icon"></i><label for="logemail" class="text-left font-weight-bold">Email</label><small id="logerrorMsg2"></small><input type="text" class="form-control" placeholder="Email" name="logemail" id="logemail">
            <small class="form-text">Your email is secure with us.</small>
        </div>
        <div class="form-group">
            <i class="fas fa-key icon"></i><label for="logpass" class="text-left font-weight-bold">Password</label><small id="logerrorMsg3"></small><input type="password" class="form-control" placeholder="Password" name="logpass" id="logpass">
        </div>
        <div class="login-btn-row">
            <div class="signup-text">Don't have an account? Sign up <a href="signup.php" class="signup-link">here</a></div>
            <div>
              <span id="LogSuccessMsg"></span>
              <button id="Login" type="button" class="btn btn-primary login-btn" onclick="LoginUser()">Log In</button>
            </div>
        </div>
    </form>


</div>

<script src="js/jquery-2.1.4.min.js"></script>  <!-- jQuery (Bootstrap JS plugins depend on it) -->
<script src="js/popper.min.js">
</script>
<script src="js/bootstrap.min.js"></script>     <!--default bootstrap JavaScript-->
<script src="js/all.min.js">
</script>

<script src="js/script.js"></script>            <!--our own JavaScript that will override the default JavaScript-->
<script src="js/requestAjax.js">
</script>

</body>
</html>
