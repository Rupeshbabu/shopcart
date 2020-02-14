<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Cart.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$cart = new Cart($db);


$data = json_decode(file_get_contents("php://input"));

if ($data != null) {
    $d = array();
    $d["product_uni_id"] = $data->product_uni_id;
    $d["cart_uni_id"] = $data->cart_uni_id;
    $d["user_uni_id"] = "8ed1a7a2b5f8";
    if ($data->quantity <= 0) {
        if ($cart->checkItem($d)) {
            $update = $cart->deleteCart($d);
            if ($update) {
                echo json_encode(array("msg" => 0));
            } else {
                echo json_encode(array("msg" => 1));
            }
        }
    } else {
        $d["total_price"] = $data->total_price;
        $d["quantity"] = $data->quantity;
        if ($cart->checkItem($d)) {
            $update = $cart->updateItem($d);
            if ($update) {
                echo json_encode(array("msg" => 0));
            } else {
                echo json_encode(array("msg" => 1));
            }
        }
    }
}
