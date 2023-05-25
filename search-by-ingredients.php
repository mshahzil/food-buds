<!DOCTYPE html>
<html lang="en">
  
  <!--head tag-->
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!--supports Edge version of Internet Explorer only--> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!--prevents mobile devices from zooming out automatically-->
    <title>Search By Ingredients</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  <!--default bootstrap css styles--> 
    <link rel="stylesheet" href="css/styles-ingredients.css">         <!--our own css styles that will override the default styles-->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"> <!--import font Oxygen-->
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">  <!--import font Lora-->  
  </head>

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
        <div class="col-md-3" id="enter-ing">
          <h3 >Enter your Ingredients below:</h3>
          <input type="text" name="ingredient">
          <br>
          <h3>Or Select Ingredients from the List below:</h3>
          <ul class="no-bullets">
            <li><label><input type="checkbox" name="milk">  Milk</label></li>
            <li><label><input type="checkbox" name="yogurt">  Yogurt</label></li>
            <li><label><input type="checkbox" name="eggs">  Eggs</label></li>
            <li><label><input type="checkbox" name="butter">  Butter</label></li>
            <li><label><input type="checkbox" name="cheese">  Cheese</label></li>
            <li><label><input type="checkbox" name="flour">  Flour</label></li>
            <li><label><input type="checkbox" name="bread">  Bread</label></li>
            <li><label><input type="checkbox" name="rice">  Rice</label></li>
            <li><label><input type="checkbox" name="noodles">  Noodles</label></li>                     
            <li><label><input type="checkbox" name="chicken">  Chicken</label></li>
            <li><label><input type="checkbox" name="beef">  Beef</label></li>
            <li><label><input type="checkbox" name="mutton">  Mutton</label></li>
            <li><label><input type="checkbox" name="fish">  Fish</label></li>
            <li><label><input type="checkbox" name="shrimps">  Shrimps</label></li>
            <li><label><input type="checkbox" name="oil">  Oil</label></li>
            <li><label><input type="checkbox" name="onions">  Onions</label></li>
            <li><label><input type="checkbox" name="tomatoes">  Tomatoes</label></li>
            <li><label><input type="checkbox" name="lettuce">  Lettuce</label></li>
            <li><label><input type="checkbox" name="sugar">  Sugar</label></li>
            <li><label><input type="checkbox" name="chocolate">  Chocolate</label></li>
          </ul>
          <button class="search">Search</button>
        </div>

        <div class="col-md-9">
          <div class = "row">
            <div class="col-12">
              <a href="search-by-category.php" class="toggle-link">Search By Category</a>
            </div>
          </div>

          <div id="final">
            <div class="row">
              <div class="col-md-12">
                <h3 class="recipes-title text-center">Recipes based on your Ingredients</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <button id="filter">Filter by Category</button>
              </div>
            </div>

            <div class="row output-recipes">
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe1" class="category-tile">
                      <img id="img1" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe2" class="category-tile">
                      <img id="img2" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe3" class="category-tile">
                      <img id="img3" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe4" class="category-tile">
                      <img id="img4" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe5" class="category-tile">
                      <img id="img5" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe6" class="category-tile">
                      <img id="img6" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe7" class="category-tile">
                      <img id="img7" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe8" class="category-tile">
                      <img id="img8" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4">
                 <a>
                    <div id="recipe9" class="category-tile">
                      <img id="img9" width="200" height="200" src="" alt="Recipe">
                      <span></span>
                    </div>
                  </a>
               </div>
             </div>
           </div> <!-- End of #final -->
           <!-- <div class="clear"></div> -->
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
    
    <script>

      $(".output-recipes > div").css("visibility", "hidden");

      $(function () {

        var ingredientsList = [];
        var recipe_id = [];
 
        $(".search").on("click", function () {
            ingredientsList = [];
            recipe_id = [];
            var checkboxes = $("input[type='checkbox']:checked");

            for(var i=0; i<checkboxes.length; i++) {
              ingredientsList.push(checkboxes[i].name);

            }

            var textBox = $("input[name='ingredient']").val();

            if (textBox != "") {
              var text_ingr = textBox.split(" ");
              for (var i=0; i<text_ingr.length; i++) {
                ingredientsList.push(text_ingr[i]);
              }
            }
            console.log(ingredientsList);

            ajaxCall();
        });

        function ajaxCall() {
            var ingr = "";

            for(var i=0; i<ingredientsList.length; i++) {

               if (i == (ingredientsList.length - 1)) {
                ingr = ingr + ingredientsList[i];
              }
              else {
                ingr = ingr + ingredientsList[i] + "%2C";
              }

            }

            var url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?ingredients=" + ingr +"&number=9&ranking=1&ignorePantry=true";

            console.log(url);

            const settings1 = {
              "async": true,
              "crossDomain": true,
              "url": url,
              "method": "GET",
              "headers": {
                "x-rapidapi-key": "11de393856msh72ee82d250bfe23p13dd41jsnb3574afa47c1",
                "x-rapidapi-host": "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
              }
            };

            $(".output-recipes > div").css("visibility", "visible");

            $.ajax(settings1).done(function (response) {

                for (var i=0; i<response.length; i++) {
                  var image_id = "#" + "img" + (i+1);
                  var title_id = image_id + " + span";
                  $(image_id).attr("src" , response[i].image);
                  $(title_id).html(response[i].title);
                  recipe_id.push(response[i].id);
                }
                console.log(response);
                console.log(recipe_id);
            });
        }

        $(".category-tile").on("click", function () {
            var id = $(this).attr("id");
            ajaxCall2(id);
        });

        function ajaxCall2 (id) {
            
            id = id.replace("recipe", "");
            final_id = recipe_id[id - 1];

            console.log("ID: " + id);
            console.log("Final ID: " + final_id);

            var url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/" + final_id + "/information";

            const settings2 = {
              "async": true,
              "crossDomain": true,
              "url": url,
              "method": "GET",
              "headers": {
                "x-rapidapi-key": "11de393856msh72ee82d250bfe23p13dd41jsnb3574afa47c1",
                "x-rapidapi-host": "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
              }
            };

            $.ajax(settings2).done(function (res) {
                console.log(res);
                console.log(res.instructions);

                var recipes = $("#final");
                recipes.html("");
                recipes.css("padding" , "0 0 0 20px");

                recipes.append("<h2 class='recipes-title text-center'>" + res.title + "</h2><br>");
                recipes.append("<h3>Ingredients:</h3><br>");
                recipes.append("<ul>")
                for(var i=0; i< res.extendedIngredients.length; i++){
                  recipes.append("<li>"+res.extendedIngredients[i].name+"</li>")
                }
                recipes.append("</ul>");
                
                recipes.append("<h3>Instructions:</h3><br>");
                inst = res.instructions;
                for (var i=1; i<=10; i++) {
                  var num = i + ".";
                  inst = inst.replace(num , "");
                }
                inst_split=inst.split(".");
                recipes.append("<ol type='1'> ");
                for(var j=0; j<inst_split.length; j++){
                  recipes.append("<li>"+inst_split[j]+".</li>");
                }
                recipes.append("</ol>");

            });
        }

      });
    </script>
  </body>
 </html>