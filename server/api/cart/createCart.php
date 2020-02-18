<?php

// Headers
include_once '../../config/Database.php';
include_once '../../models/Cart.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$cart = new Cart($db);
 session_start();

$data = json_decode(file_get_contents("php://input"));

if ($data != null) {
    $d = array();

    $d["product_uni_id"] = $data->product_uni_id;
    $d["cart_uni_id"] = $data->cart_uni_id;
    $d["user_uni_id"] = $_SESSION['user_uni_id'];
    $d["title"] = $data->title;
    $d["image"] = $data->image;
    $d["price"] = $data->price;
    $d["quantity"] = $data->quantity;

    if ($cart->checkItem($d)) {
        echo json_encode(array("msg" => 2));
        // $update = $cart->updateItem($d);
        // if($update){
        //     echo json_encode(array("msg" => 0));
        // } else {
        //     echo json_encode(array("msg" => 1));
        // }
    } else {
        $res = $cart->createCart($d);
        if ($res) {
            echo json_encode(array("msg" => 0));
        } else {
            echo json_encode(array("msg" => 1));
        }
    }
}
