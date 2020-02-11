<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Address.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$address = new Address($db);


$data = json_decode(file_get_contents("php://input"));

if($data != null) {
    $d = array();

    $d["adr_uni_id"] = $data->adr_uni_id;
    $d["username"] = $data->username;
    $d["user_uni_id"] = $data->user_uni_id;
    $d["email"] = $data->email;
    $d["address"] = $data->address;
    $d["landmark"] = $data->landmark;
    $d["city"] = $data->city;
    $d["state"] = $data->state;
    $d["street"] = $data->street;
    $d["phone"] = $data->phone;
    $d["pincode"] = $data->pincode;



    if ($address->createAdrs($d)) {
        echo json_encode(array("msg" => 0));
    } else {
        echo json_encode(array("msg" => 1));
    }

}
