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

$d["name"] = $data->name;
$d["sub_category"] = $data->sub_category;
$d["parent_id"] = $data->parent_id;
$d["status"] = 1;

if($category->checkCategory($d['name'])) {
    $res = $category->createCategory($d);
    if ($res) {
        echo json_encode(array("msg" => 0));
    } else {
        echo json_encode(array("msg" => 1));
    }
} else {
    echo json_encode(array("msg" => 2));
}


