<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Categories.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$category = new Categories($db);


$data = json_decode(file_get_contents("php://input"));
$d = array();

$d["parent_id"] = $data->parent_id;
$d["status"] = 1;


$res = $category->getSubSingleCategories($d);

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
