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
$d["password"] = md5($data->password);


$res = $user->loginUser($d);
if($res->rowCount() > 0) {
  $gpUserProfile = $res->fetch(PDO::FETCH_ASSOC);
  extract($gpUserProfile);

    echo json_encode(array("msg" => 0, "data"=>$gpUserProfile));

} else {
    echo json_encode(array("msg" => 1));

}
