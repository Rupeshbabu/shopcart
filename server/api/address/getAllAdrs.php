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

    $d["user_uni_id"] = $data->user_uni_id;
    $d["email"] = $data->email;

    $res = $address->getAllAdrs($d);

    if ($res->rowCount() > 0) {
        $result = array();
        while ($gpUserProfile = $res->fetch(PDO::FETCH_ASSOC)) {
            extract($gpUserProfile);
            $result[] = $gpUserProfile;
        }
        echo json_encode($result);
    } else {
        echo json_encode(array("msg" => 1));
    }
}
