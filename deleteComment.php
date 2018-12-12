<?php
  require('dbconnect.php');
  session_start();
                 
      $commentID = $_POST['commentID'];
             
      $sql = "DELETE FROM comments WHERE commentID = '$commentID'";
      mysqli_query($connection,$sql);     
?>
