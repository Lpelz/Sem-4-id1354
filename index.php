<?php
 session_start();
 $_SESSION['page'] = 'index.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <script type ="text/javascript" src ="js/jquery.js"></script>
        <script type ="text/javascript" src ="js/tastyRecipes.js"></script>
        <title>Home page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id = "home">
        <div class ="navbar">
        <ul>     
        <li><a class= "current" href="index.php"><img alt="Home" src="images/homeicon.png"><p>Home page</p></a></li>
        <li><a href="meatballs.php"><img  alt="Meatballs" src="images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
        <li><a href="pancakes.php"><img  alt="Pancakes" src="images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
        <li><a href="calendar.php"><img  alt="Calendar" src="images/calendaricon.png"><p>Calendar</p></a></li>
        <li><a href="loginpage.php"><img  alt="Login" src="images/loginicon.png"><p>Login page</p></a></li>
        <?php
        if(isset($_SESSION['username']))
        {
            include('loggedin.php');
        }
        ?>
        </ul>
        </div>
        <br><br>
        <div class ="homepage">
            <h1>Welcome to Tasty Recipes site</h1> <br>
            <p>
                Here we have high class recipes for all kinds of tastes, right now
                we have two recipes to view. The recipes we have so far are a meatballs recipe 
                and a pancakes recipe, navigate to them with the menu at the top of the screen. We 
                have a calendar with days for specific meals that you should check out via the menu! 
            </p>
        </div>
    </body>
</html>

