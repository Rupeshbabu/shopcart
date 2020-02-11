<?php

class Products
{
    // DB Stuff
    private $conn;
    private $table = 'products';

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function createProduct($req = array()) {

        $query = "INSERT INTO " . $this->table . " SET title=:title,
        description=:description, spec=:spec, price=:price, discount_price=:discount_price,
         category=:category,
         sub_category=:sub_category,images=:images,product_uni_id=:product_uni_id,quantity=:quantity,
        status=:status, brand=:brand,added_date=:added_date";
        $stmt = $this->conn->prepare($query);

        $title = htmlspecialchars(strip_tags($req["title"]));
        $description = htmlspecialchars(strip_tags($req["description"]));
        $spec = htmlspecialchars(strip_tags($req["spec"]));
        $price = htmlspecialchars(strip_tags($req["price"]));
        $discount_price = htmlspecialchars(strip_tags($req["discount_price"]));
        $category = htmlspecialchars(strip_tags($req["category"]));
        $sub_category = htmlspecialchars(strip_tags($req["sub_category"]));
        $status = htmlspecialchars(strip_tags($req["status"]));
        $brand = htmlspecialchars(strip_tags($req["brand"]));
        $added_date = htmlspecialchars(strip_tags($req["added_date"]));
        $images = htmlspecialchars(strip_tags($req["images"]));
        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $quantity = htmlspecialchars(strip_tags($req["quantity"]));

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':spec', $spec);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':discount_price', $discount_price);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':sub_category', $sub_category);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':brand', $brand);
        $stmt->bindParam(':added_date', $added_date);
        $stmt->bindParam(':images', $images);
        $stmt->bindParam(':product_uni_id', $product_uni_id);
        $stmt->bindParam(':quantity', $quantity);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;


    }

    public function getAllProducts() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);

        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }
    }


    public function getProduct($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE product_uni_id=:product_uni_id";
        $stmt = $this->conn->prepare($query);

        $product_uni_id = htmlspecialchars(strip_tags($id));

        $stmt->bindParam(':product_uni_id', $product_uni_id);

        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }
    }
}
