<?php
 require 'dbconnect.php';
          session_start();
   
        $username = $_SESSION['username'];
        $page = $_SESSION['page'];
        $comment = $_POST['comment'];
        
        $sql = "INSERT INTO comments (comment,writer,page) VALUES ('$comment','$username','$page')";
        mysqli_query($connection,$sql);
      
?>

