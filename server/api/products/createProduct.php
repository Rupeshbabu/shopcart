<?php

include_once '../../config/Database.php';
include_once '../../models/Products.php';
// Instantiate DB & connect

$database = new Database();
$db = $database->connect();
// Instantiate blog post object
$products = new Products($db);

$data = json_decode($_POST['productForm']);

$d = array();

$d["title"] = $data->title;
$d["description"] = $data->description;
$d["spec"] = $data->spec;
$d["price"] = $data->price;
$d["discount_price"] = $data->discount_price;
$d["category"] = $data->category;
$d["product_uni_id"] = $data->product_uni_id;
$d["quantity"] = $data->quantity;
$d["brand"] = $data->brand;
$d["sub_category"] = $data->sub_category;
$d["added_date"] = $data->added_date;
$d["status"] = 1;


if (!empty($_FILES['file'])) {
    $countfiles = count($_FILES['file']['name']);
    $target_dir = "../../../img/products/";
    $imgs = array();
    for ($i = 0; $i < $countfiles; $i++) {
        $filename = $_FILES["file"]["name"][$i];
        $tmp = explode('.', $filename);
        $extension = end($tmp);
        $imageName = $data->product_uni_id . "_" . $i . "." . $extension;
        $target_file = $target_dir . basename($imageName);
        if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file)) {
            $imgs[] = $imageName;
        }
    }
    $d["images"] = implode(",", $imgs);

    if($products->createProduct($d)) {
        echo json_encode(array("msg" => 0));

    }else{
        echo json_encode(array("msg" => 1));

    }
}else {
        echo json_encode(array("msg" => 2));

}
