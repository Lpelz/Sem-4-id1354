<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <script type ="text/javascript" src ="js/jquery.js"></script>
        <script type ="text/javascript" src ="js/tastyRecipes.js"></script>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id = "home">
        <div class ="navbar">
        <ul>      
        <li><a href="index.php"><img alt="Home" src="images/homeicon.png"><p>Home page</p></a></li>
        <li><a href="meatballs.php"><img  alt="Meatballs" src="images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
        <li><a href="pancakes.php"><img  alt="Pancakes" src="images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
        <li><a href="calendar.php"><img  alt="Calendar" src="images/calendaricon.png"><p>Calendar</p></a></li>
        <li><a class= "current" href="loginpage.php"><img  alt="Login" src="images/loginicon.png"><p>Login page</p></a></li>
        <?php
        if(isset($_SESSION['username']))
        {
          include('loggedin.php');
        }
        else{
           include('hiddenLoggedin.php');
        }
        ?>
        </ul>
        </div>
        <br><br>
        <div class ="homepage">            
              <div class ="loginpage"                
              <label>Enter Username:</label><br>
                <input id ="username" placeholder ="username" type = "text"><br>
                <label>Enter Password:</label><br>
                <input id = "password" placeholder="password" type = "text"> <br>
                <input id ="submitLogin" type="button" value="Log in">
                <br>
            </div>          
        </div>
    </body>
</html>

