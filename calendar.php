<?php
session_start();
$_SESSION['page']='calendar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <script type ="text/javascript" src ="js/jquery.js"></script>
        <script type ="text/javascript" src ="js/tastyRecipes.js"></script>
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class ="navbar">
        <ul>      
        <li><a href="index.php"><img alt="Home" src="images/homeicon.png"><p>Home page</p></a></li>
        <li><a href="meatballs.php"><img  alt="Meatballs" src="images/meatballsicon.png"><p>Meatballs recipe</p></a></li>
        <li><a href="pancakes.php"><img  alt="Pancakes" src="images/pancakeicon.png"><p>Pancakes recipe</p></a></li>
        <li><a class= "current" href="calendar.php"><img  alt="Calendar" src="images/calendaricon.png"><p>Calendar</p></a></li>
        <li><a href="loginpage.php"><img  alt="Login" src="images/loginicon.png"><p>Login page</p></a></li>
        <?php
        if(isset($_SESSION['username']))
        {
            include('loggedin.php');
        }
        ?>
        </ul>
        </div>        
           <ul class="weekdays">
              <li>Monday</li>
              <li>Tuesday</li>
              <li>Wednesday</li>
              <li>Thursday</li>
              <li>Friday</li>
              <li>Saturday</li>
              <li>Sunday</li>
            </ul>
          <ul class="days"> 
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li><div>7</div>
            <div><a href="pancakes.php"><img alt = "Pancakes" src ="images/pancakesimage.jpg"></a>
            </div> 
            </li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li><div>16</div>
            <div><a href="meatballs.php"><img alt = "Meatballs" src ="images/meatballspicture.jpg"></a>
            </div> 
            </li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
          </ul>       
    </body>
</html>
