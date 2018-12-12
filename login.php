<?php
require('dbconnect.php');
session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];            
   
    if(empty($username)|| empty($password)){
       echo '0';
    }          

    $sql = "SELECT * FROM user WHERE password='$password' AND username='$username'";
    $result = mysqli_query($connection,$sql);
    $rows = mysqli_num_rows($result);
     
    if($rows==1)
    {  
       $_SESSION['username']= $username;
       echo '1';
    }
    else
    {  
       echo '0';
    }
?>

