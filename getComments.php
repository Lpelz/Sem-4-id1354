<?php
   require 'dbconnect.php';
   session_start();

   
    $page =  $_SESSION['page'];
    $sql = "SELECT * FROM comments where page='$page'";
    $result = mysqli_query($connection, $sql);
    
   
    while ($row = mysqli_fetch_assoc($result)){
        
     $isDeletable = false;
   
     if(isset($_SESSION['username']) && $_SESSION['username']==$row['writer']){  
       $isDeletable = true;
     } 
          $comments[] = array("comment"=>$row['comment'],
                              "username" =>$row['writer'],
                              "commentID" => $row['commentID'],
                              "isDeletable" => $isDeletable);
    }
    echo json_encode($comments);


