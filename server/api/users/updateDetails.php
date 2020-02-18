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
$u =array();
$u['user_uni_id'] = $_SESSION['user_uni_id'];
$u['username'] = $data->username;
$u['phone'] = $data->phone;

if($Users->updateUserDetails($u)){
    echo json_encode(array('msg'=>0));
}else{
    echo json_encode(array('msg'=>1));
}




