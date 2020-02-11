<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Address.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$address = new Address($db);


$data = json_decode(file_get_contents("php://input"));

if ($data != null) {
    $d = array();

    $d["adr_uni_id"] = $data->adr_uni_id;
    $d["user_uni_id"] = $data->user_uni_id;
    $d["email"] = $data->email;

    $res = $address->deleteAdrs($d);

    if ($res) {
        echo json_encode(array("msg" => 0));
    } else {
        echo json_encode(array("msg" => 1));
    }
   
}
