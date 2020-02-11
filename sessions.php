<?php

 function isLogin(){
    session_start();
    
    if(isset($_SESSION['user_uni_id'])) {
        // header("Location:logout.php")

    }
    
}

 function isNotLogin(){
    session_start();
    $user_check = @$_SESSION['email'];
    include("includes/db.php");

    $ses_sql = mysqli_query($db,"select email,user_uni_id from users where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $login_session = $row['user_uni_id'];
    
    if($_SESSION['user_uni_id'] != $login_session){
    //    header("location:login.php");
       header("location:logout.php?prevPage=" . urlencode($_SERVER['REQUEST_URI']));

       die();
    }
    
}

?>