<?php

class Cart
{
    // DB Stuff
    private $conn;
    private $table = 'cart';

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function checkItem($req = array()) {
        $query = "SELECT * FROM " . $this->table . " WHERE product_uni_id =:product_uni_id AND user_uni_id=:user_uni_id";
        $stmt = $this->conn->prepare($query);

        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':product_uni_id', $product_uni_id);

        if ($stmt->execute()) {
            if ($stmt->rowCount() <= 0) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function createCart($req = array())
    {
        $query = "INSERT INTO " . $this->table . " SET 
        product_uni_id=:product_uni_id,
        user_uni_id=:user_uni_id, title=:title, 
        image=:image, cart_uni_id=:cart_uni_id
        , price=:price, quantity=:quantity";
        $stmt = $this->conn->prepare($query);

        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $title = htmlspecialchars(strip_tags($req["title"]));
        $image = htmlspecialchars(strip_tags($req["image"]));
        $cart_uni_id = htmlspecialchars(strip_tags($req["cart_uni_id"]));
        $price = htmlspecialchars(strip_tags($req["price"]));
        $quantity = htmlspecialchars(strip_tags($req["quantity"]));

        $stmt->bindParam(':product_uni_id', $product_uni_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':cart_uni_id', $cart_uni_id);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':quantity', $quantity);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }
    public function deleteItem()
    {
    }

    public function updateItem($req = array())
    {
        $query = "UPDATE ". $this->table . " SET quantity=:quantity WHERE product_uni_id=:product_uni_id AND user_uni_id=:user_uni_id";
        $stmt = $this->conn->prepare($query);

        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        // $cart_uni_id = htmlspecialchars(strip_tags($req["cart_uni_id"]));
        $quantity = htmlspecialchars(strip_tags($req["quantity"]));
        // $quantity =5;

        $stmt->bindParam(':product_uni_id', $product_uni_id);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        // $stmt->bindParam(':cart_uni_id', $cart_uni_id);
        $stmt->bindParam(':quantity', $quantity);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }

    public function getItems()
    {
    }
    public function getItem()
    {
    }

    // admin here

    public function getAllItem()
    {
    }

    public function getItemByAdmin()
    {
    }
}
