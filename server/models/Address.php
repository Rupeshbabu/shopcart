<?php

class Address
{
    // DB Stuff
    private $conn;
    private $table = 'address';

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function createAdrs($req = array())
    {
        $query = "INSERT INTO " . $this->table . " SET 
        adr_uni_id=:adr_uni_id,
        username=:username, user_uni_id=:user_uni_id, email=:email, address=:address
        , landmark=:landmark, city=:city, state=:state, street=:street, pincode=:pincode
        , phone=:phone";
        $stmt = $this->conn->prepare($query);

        $adr_uni_id = htmlspecialchars(strip_tags($req["adr_uni_id"]));
        $username = htmlspecialchars(strip_tags($req["username"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $email = htmlspecialchars(strip_tags($req["email"]));
        $address = htmlspecialchars(strip_tags($req["address"]));
        $landmark = htmlspecialchars(strip_tags($req["landmark"]));
        $city = htmlspecialchars(strip_tags($req["city"]));
        $state = htmlspecialchars(strip_tags($req["state"]));
        $street = htmlspecialchars(strip_tags($req["street"]));
        $pincode = htmlspecialchars(strip_tags($req["pincode"]));
        $phone = htmlspecialchars(strip_tags($req["phone"]));

        $stmt->bindParam(':adr_uni_id', $adr_uni_id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':landmark', $landmark);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':street', $street);
        $stmt->bindParam(':pincode', $pincode);
        $stmt->bindParam(':phone', $phone);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }
    public function deleteAdrs($req = array())
    {
        $query = "DELETE FROM " . $this->table . " WHERE adr_uni_id=:adr_uni_id AND user_uni_id =:user_uni_id AND email=:email";
        $stmt = $this->conn->prepare($query);
        
        $adr_uni_id = htmlspecialchars(strip_tags($req["adr_uni_id"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $email = htmlspecialchars(strip_tags($req["email"]));

        $stmt->bindParam(':adr_uni_id', $adr_uni_id);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':email', $email);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }
        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }

    public function updateAdrs()
    {
    }

    public function getAdrs()
    {
    }

    // admin here

    public function getAllAdrs($req = array())
    {
        $query = "SELECT * FROM " . $this->table . " WHERE user_uni_id =:user_uni_id AND email=:email";
        $stmt = $this->conn->prepare($query);

        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $email = htmlspecialchars(strip_tags($req["email"]));
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':email', $email);

        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }

    }

    public function getAdrsByAdmin()
    {
    }
}
