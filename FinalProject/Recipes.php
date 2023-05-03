<?php 
//requires file or will break 
//require 'DatabaseConnectionString.php';
require 'DBConnecttionStringHostSite.php';


//database work flow
//1. connect to the database
//2. create your SQL statement
//3. prepare the statement
//4. bind any parameters as needed
//5. execute your sql command/prepared statement
//6. process your result-set/object


//#1 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//#2
$sql = "SELECT * FROM `Recipe_Items`";

//#3
$stmt = $conn->prepare($sql);

//#4
//no parameters to bind here

//#5

$stmt->execute();

//6
$stmt->setFetchMode(PDO::FETCH_ASSOC);     //set result as an associative array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="CSSStyle.css">
    <link rel="stylesheet" type ="text/css" href="CSSStyle.scss">

    <link rel="stylesheet" type ="text/css" href="CSSStyleMidSized.css">
    <link rel="stylesheet" type ="text/css" href="CSSStyleMidSized.css">

    <link rel="stylesheet" type ="text/css" href="CSSStyleSmallSized.scss">
    <link rel="stylesheet" type ="text/css" href="CSSStyleSmallSized.css">
    <script src="JavaScriptFile.js"></script> 
    <title>Recipe Manager</title>
</head>
</head>
<body>
    <header>
        
        <img src="Images/Logo.png" alt = "logo" class = "logo">
        <nav class="navbar">
          
            <ul class="nav-list">
              <li class="nav-item -top"><a href="Home.html">Home</a></li>
              <li class="nav-item -top"><a href="Recipes.php">Recipes</a></li>
              <li class="nav-item -top"><a href="AddRecipeForm.html">Add Recipe</a></li>
              <li class="nav-item -top"><a href="Contact.html">Contact</a></li>
              <li class="nav-item -top"><a href="login.html">Login</a></li>
            </ul>
          </nav>
        
        
          <div class = "innerBigTextBox">
        <h1>Recipes</h1>
          </div>

          <div class = "innerTextBox">
            <p>From savory mains to sweet treats, we've got you covered. Each recipe is thoughtfully crafted with easy-to-follow instructions, ingredient lists, and helpful tips to ensure that your culinary adventure is a success. We believe that cooking should be enjoyable, and our recipes are designed to make the process as simple and stress-free as possible. So, whether you're cooking for one or entertaining a crowd, you'll find inspiration and guidance here on our recipe page.</p>
              </div>

        
            </header>

            <div class="grid-container">
               <!--Start -->
              <?php 
              while($row = $stmt ->fetch() ) { //start of loop
              ?>
               <!--Start -->
               <div class="grid-item">
                 <img src="<?php echo $row['image']?>" alt="<?php echo $row['name'] ?>" onclick="showCard(<?php echo $row['id']?>)">
                 
                 <p class="description"  > <?php echo $row['name'] ?></p>
 
                 <div id = "P<?php echo $row['id']?>" class="card">
                   <span class="close" onclick="hideCard(<?php echo $row['id']?>)">&times;</span>
                   <div class="content">
                     <div class = "contentHeader">
                       <h2><?php echo $row['name'] ?></h2>
                     </div>
 
                     <div class = "contentBody">
                       <p> Preparation Time: <?php echo $row ['prepTimeHour']?>:<?php echo $row ['prepTime']?> </p>
                       <p> Total Cook Time: <?php echo $row ['cookTimeHour']?>:<?php echo $row ['cookTime']?> </p>
                       <p> Serving Size: <?php echo $row ['servingSize']?></p>
                       <p> Difficulty: <?php echo $row ['difficulty']?></p>
 
                       <p> Ingredients: <?php echo $row ['ingredients']?></p>
                       <p> Instructions: <?php echo $row ['instructions']?></p>
                     </div>
                   </div>
                 </div>
               </div>
 
               <?php
                   } //end of loop
               ?>
               <!--End on the first grid item, use php to loop through the info needed and to echo out html in this fashion so that it dynamically makes new grid items with pop up cards-->
  
              </div>
              <!--End of grid container -->

              <footer>
              <div>
                <a href="https://www.linkedin.com/"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn Logo" class="social-icons"></a>
                <a href="https://github.com/"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Github Logo" class="social-icons"></a>
              </div>
            </footer>
</body>
</html>