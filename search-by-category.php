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
                <a href="home.html"><span class="glyphicon glyphicon-home"></span>Home</a>
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
                <a href="#contact-us"><span class="glyphicon glyphicon-earphone"></span><br class="hidden-xs">Contact Us</a>
              </li>
              <li>
                <a href="#about-us"><span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">About Us</a>
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
    <div class="container-fluid" id="content-div">

      <div class="row">
        <div class="col-md-3" id="select-cat">
          <h3 >Select a Category: </h3>
          <br>
          <input type="radio" value="Chinese" name="radio" id="cat1"/> 
          <label for="cat1">  Chinese</label><br>
          <input type="radio" value="Italian" name="radio" id="cat2"/>
          <label for="cat2">   Italian</label><br>
          <input type="radio" value="Pakistani" name="radio" id="cat3"/>
          <label for="cat3">  Pakistani</label><br>
          <input type="radio" value="Mexican" name="radio" id="cat5"/>
          <label for="cat5">  Mexican</label><br>
          <input type="radio" value="Thai" name="radio" id="cat6"/>
          <label for="cat6">  Thai</label><br>
          <input type="radio" value="French" name="radio" id="cat7"/>
          <label for="cat7">  French</label><br>
          <input type="radio" value="Spanish" name="radio" id="cat8"/>
          <label for="cat8">  Spanish</label><br>
          <input type="radio" value="Turkish" name="radio" id="cat9"/>
          <label for="cat9">  Turkish</label><br>
          <br>
          <button class="cat-recipe">Show Recipe</button>
        </div>

        <div class="col-md-9" id="show-recipe">

          <div class = "row">
            <div class="col-md-12">
              <a href="search-by-ingredients.php" class="toggle-link">Search By Ingredients</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h3 id="recipes-title" class="text-center">Recipes based on selected Category</h3>
              <br>
            </div>
            <div id="temp">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <footer class="panel-footer footer">
      <div class="container">
        <div class="row">

          <section id="contact-us" class="col-sm-6">
            <span>Contact Us</span><br>
            Phone No: 111-222-333<br>
            Email: <a href="mailto: foodbuds@gmail.com">foodbuds@gmail.com</a><br>
            <hr class="visible-xs">
          </section>

          <section id="about-us" class="col-sm-6">
            <span>About Us</span><br>
            <p>We are a trio of Software Engineering students at<br>NUST Islamabad. We love food!<br></p>     
            <hr class="visible-xs">
          </section>

        </div> <!-- End of .row -->

        <div class="text-center">&copy; Copyright Food Buds 2020</div>
      </div>  <!-- End of .container -->
    </footer>

    <script src="js/jquery-2.1.4.min.js"></script>  <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="js/bootstrap.min.js"></script>     <!--default bootstrap JavaScript-->
    <script src="js/script.js"></script>            <!--our own JavaScript that will override the default JavaScript-->
    
    <script type="text/javascript">
      $(document).ready(function(){
        $("button").on("click", radio_value);

      });
      function radio_value(){
        var value= $('input[type="radio"]:checked').val();
        if(value==="Chinese"){
          var recipes= $('#temp');
          var recipe_img='<div class="col-md-4 col-sm-4"><a href="#" ><div class="category-tile"><img width="250" height="200" src="images/dumplings.jpg" alt="Dumplings" onclick="handler(this)" ><span>Dumplings</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="300" height="200" src="images/Chowmein.jpg" alt="Chowmein" onclick="handler(this)"><span>Chowmein</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/dimSum.jpg" alt="Dim Sum" onclick="handler(this)"><span>Dim Sum</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/wonton.jpg" alt="Wonton Noodles" onclick="handler(this)"><span>Wonton Noodles</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/beefNoodle.jpg" alt="Beef Noodles" onclick="handler(this)"><span>Beef Noodles</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/rolls.jpg" alt="Sping Rolls" onclick="handler(this)"><span>Spring Rolls</span></div></a></div>'
          recipes.html(recipe_img);
          }
        

        if(value==="Pakistani"){
          var recipes= $('#temp');
          var recipe_img='<div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="250" height="200" src="images/halwaPuri.jpg" alt="Halwa Puri" onclick="handler(this)"><span>Halwa Puri</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="300" height="200" src="images/haleem.jpg" alt="Haleem" onclick="handler(this)"><span>Haleem</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/biryani.jpg" alt="Biryani" onclick="handler(this)"><span>Biryani</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/pulao.jpg" alt="Pulao" onclick="handler(this)"><span>Pulao</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/karahi.jpg" alt="Chicken Karahi" onclick="handler(this)"><span>Chicken Karahi</span></div></a></div><div class="col-md-4 col-sm-4"><a href="#"><div class="category-tile"><img width="200" height="200" src="images/nihari.jpg" alt="Nihari" onclick="handler(this)"><span>Nihari</span></div></a></div>'
          recipes.html(recipe_img);

        }
      }
      function handler(a){
        // alert(a.alt);
        const settings = {
          "async": true,
          "crossDomain": true,
          "url": "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?query="+a.alt+"&number=1&offset=0&type=main%20course",
          "method": "GET",
          "headers": {
            "x-rapidapi-key": "11de393856msh72ee82d250bfe23p13dd41jsnb3574afa47c1",
            "x-rapidapi-host": "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
          }
        };

        $.ajax(settings).done(function (response) {
          var recipes= $('#show-recipe');
          recipes.css("color" , "black");
          console.log(response)
          t1=response.results[0].title;
          id1=response.results[0].id;
          recipes.html("<h2 class='recipes-title text-center'>"+t1+"</h2>");
          const settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/"+id1+"/information",
            "method": "GET",
            "headers": {
              "x-rapidapi-key": "11de393856msh72ee82d250bfe23p13dd41jsnb3574afa47c1",
              "x-rapidapi-host": "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
            }
          };
          $.ajax(settings).done(function (res) {
            console.log(res);
            recipes.append("<h3>Ingredients</h3><br>");
            recipes.append("<ul class='no-bullets'>")
            for(var i=0; i< res.extendedIngredients.length; i++){
              recipes.append("<li><input type='checkbox'>  "+res.extendedIngredients[i].name+"</li>")
            }
            recipes.append("</ul><button id='addcart'>Add to cart</button>");
            recipes.append("<h3>Instructions</h3><br>");
            inst=res.instructions;
            inst_split=inst.split(".");
            recipes.append("<ol type='1'> ");
            for(var j=0; j<inst_split.length; j++){
              recipes.append("<li>"+inst_split[j]+".</li>");
            }
            recipes.append("</ol>");

          });

        });
      }
    </script>

  </body>
</html>