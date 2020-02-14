<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Cart.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$cart = new Cart($db);

$d = array();
// session_start();
// $d["user_uni_id"] = $_SESSION['user_uni_id'];

$d["user_uni_id"] = "8ed1a7a2b5f8";

$res = $cart->getAllCarts($d);
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