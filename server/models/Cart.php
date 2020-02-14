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
        , price=:price, quantity=:quantity, total_price=:total_price";
        $stmt = $this->conn->prepare($query);

        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $title = htmlspecialchars(strip_tags($req["title"]));
        $image = htmlspecialchars(strip_tags($req["image"]));
        $cart_uni_id = htmlspecialchars(strip_tags($req["cart_uni_id"]));
        $price = htmlspecialchars(strip_tags($req["price"]));
        $total_price = htmlspecialchars(strip_tags($req["price"]));
        $quantity = htmlspecialchars(strip_tags($req["quantity"]));

        $stmt->bindParam(':product_uni_id', $product_uni_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':cart_uni_id', $cart_uni_id);
        $stmt->bindParam(':total_price', $total_price);
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
    public function deleteCart($req = array())
    {
        $query = "DELETE FROM " . $this->table . " WHERE product_uni_id=:product_uni_id AND user_uni_id=:user_uni_id AND cart_uni_id=:cart_uni_id";
        $stmt = $this->conn->prepare($query);

        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $cart_uni_id = htmlspecialchars(strip_tags($req["cart_uni_id"]));


        $stmt->bindParam(':product_uni_id', $product_uni_id);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':cart_uni_id', $cart_uni_id);


        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }

    public function updateItem($req = array())
    {
        $query = "UPDATE ". $this->table . " SET quantity=:quantity, total_price=:total_price WHERE product_uni_id=:product_uni_id AND user_uni_id=:user_uni_id AND cart_uni_id=:cart_uni_id";
        $stmt = $this->conn->prepare($query);

        $product_uni_id = htmlspecialchars(strip_tags($req["product_uni_id"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $total_price = htmlspecialchars(strip_tags($req["total_price"]));
        $quantity = htmlspecialchars(strip_tags($req["quantity"]));
        $cart_uni_id = htmlspecialchars(strip_tags($req["cart_uni_id"]));


        $stmt->bindParam(':product_uni_id', $product_uni_id);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':total_price', $total_price);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':cart_uni_id', $cart_uni_id);


        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }

    public function getAllCarts($req = array())
    {
        $query = "SELECT * FROM " . $this->table . " WHERE user_uni_id=:user_uni_id";
        $stmt = $this->conn->prepare($query);

        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $stmt->bindParam(':user_uni_id', $user_uni_id);

        if ($stmt->execute()) {
          return $stmt;
        }
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
