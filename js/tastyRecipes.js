$(document).ready(function(){                  
     reloadComments();
     
     $('#submitComment').click(function (){    
        var comment = $("#comment").val();

        $.post("addComment.php", {   
            comment: comment      
        }, function(){
            reloadComments(); 
            $("#comment").val(''); 
           });      
     });  
     
     $('#submitLogin').click(function (){    
        var username = $("#username").val();
        var password = $("#password").val();
        $.post("login.php", {   
            username: username,
            password: password
        }, function(response){  
            $("#username").val(''); 
            $("#password").val('');
            if(response == 1){
             $(".hiddenLoggedin").css("visibility","visible");
            }
            else{
                alert('invalid username or password');
            }
           });  
     }); 
     
     $('#logout').click(function (){    
        $.post("logout.php", 
        function(){  
         $(".loggedin").empty();
         $(".writecomment").empty();
         $(".delete").hide();
        });         
     });     
     
});
     
    function deleteComment(commentID){
        $.post("deleteComment.php", {   
        commentID: commentID     
        }, function(){
            reloadComments(); 
           });         
    } 
    
    function reloadComments() {
        $.getJSON("getComments.php", function (comments) {
            $("#comments").html("");
            
            for (var i = 0; i < comments.length; i++) {
                appendComment(comments[i]);
            }
        });
    }
    function appendComment(comment) {     
    $("#comments").append('<p id="username">' + comment.username + "</p>");
    $("#comments").append('<p id="usercomment">' + comment.comment + "</p>");
     if(comment.isDeletable){
     $("#comments").append("<button class ='delete' onclick= deleteComment(" + comment.commentID +")>"
     + "Delete"+ "</button>");
     } 
    }

