<?php
// Headers

include_once '../../config/Database.php';
include_once '../../models/Users.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$Users = new Users($db);
$data = json_decode(file_get_contents("php://input"));

$d=array();
session_start();
$d['user_uni_id'] = $_SESSION['user_uni_id'];

$res=$Users->dispProfile($d);
if($res->rowCount() > 0) {
    $result=array();
    while($disp=$res->fetch(PDO::FETCH_ASSOC)){
        extract ($disp);
        $result[]=$disp;
    }
    echo json_encode($result);
}else{
    echo json_encode(array("msg"=>1));
}