<?php
header("Access-Control-Allow-Origin: *");
include_once '../../config/Database.php';
include_once '../../models/Users.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$user = new Users($db);

$data = json_decode(file_get_contents("php://input"));
$d = array();

$d["email"] = $data->email;

$res = $user->checkEmail($d);

if ($res->rowCount() > 0) {
  echo json_encode(array("msg" => 1));
} else {
    echo json_encode(array("msg" => 0));

}
