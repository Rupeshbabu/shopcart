<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Users.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$Users = new Users($db);
$data = json_decode(file_get_contents("php://input"));
session_start();

$pas=array();
//$data->password= md5('password');
$pas['password']= md5($data->password);
$pas['user_uni_id']= $_SESSION['user_uni_id'];

if($Users->changePassword($pas)){
    echo json_encode(array('msg'=>0));
}else{
    echo json_encode(array('msg'=>1));
}