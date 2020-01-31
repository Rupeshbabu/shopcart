<?php
// Headers

include_once '../../config/Database.php';
include_once '../../models/Users.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$user = new Users($db);


$data = json_decode(file_get_contents("php://input"));
$d = array();

$d["email"] = $data->email;
$d["username"] = $data->username;
$d["user_uni_id"] = $data->user_uni_id;
$d["password"] = md5($data->password);
$d["gender"] = $data->gender;
$d["dob"] = $data->dob;
$d["phone"] = $data->phone;
$d["added_date"] = $data->date;
$d["status"] = "active";
$d["email_conf"] = "pending";

$res = $user->createUser($d);
if($res) {
    echo json_encode(array("msg" => 0));

} else {
    echo json_encode(array("msg" => 1));

}
