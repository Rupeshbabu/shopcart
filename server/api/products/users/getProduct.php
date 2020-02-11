<?php

// Headers
include_once '../../../config/Database.php';
include_once '../../../models/Products.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
$products = new Products($db);

$data = json_decode(file_get_contents("php://input"));


$res = $products->getProduct($data->id);

if ($res->rowCount() > 0) {
    // $result = array();
    $gpUserProfile = $res->fetch(PDO::FETCH_ASSOC);
        extract($gpUserProfile);
            $imgs = array();
            $imgs = explode(",", $images);
            $result = array(
                "title" => $title, "description" => $description,
                "id" => $id, "spec" => $spec, "price" => $price, "discount_price" => $discount_price,
                "category" => $category, "sub_category" => $sub_category, "brand" => $brand, "images" => $imgs,
                "added_date" => $added_date, "status" => $status, "product_uni_id" => $product_uni_id, "quantity" => $quantity
            );
    echo json_encode($result);
} else {
    echo json_encode(array("msg" => 1));
}
