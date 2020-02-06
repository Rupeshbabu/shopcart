<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Categories.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$category = new Categories($db);


$res = $category->getAllCategories();

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
