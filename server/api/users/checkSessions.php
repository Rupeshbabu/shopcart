<?php
header("Access-Control-Allow-Origin: *");
session_start();
// $user_check = $_SESSION['email'];
// include("../../../includes/db.php");

// $ses_sql = mysqli_query($db,"select email,user_uni_id from users where email = '$user_check' ");
// $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

// $login_session = $row['user_uni_id'];

if(isset($_SESSION['user_uni_id'])){
  echo json_encode(array("msg" => 0));
}else {
    echo json_encode(array("msg" => 1)); 
}