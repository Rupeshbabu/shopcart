<?php

class Categories

{
    // DB Stuff
    private $conn;
    private $table = 'categories';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function checkCategory($category) {
        $query = "SELECT name FROM " . $this->table . " WHERE name =:name";
        $stmt = $this->conn->prepare($query);
        $name = htmlspecialchars(strip_tags($category));
        $stmt->bindParam(':name', $name);
        // Execute query
        if ($stmt->execute()) {
            if($stmt->rowCount() <= 0) {
                return true;
            }else {
                return false;
            }
        }
        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;
    }

    public function createCategory($req =  array())
    {
        $query = "INSERT INTO " . $this->table . " SET name=:name,
        sub_category=:sub_category, parent_id=:parent_id, status=:status";
        $stmt = $this->conn->prepare($query);

        $name = htmlspecialchars(strip_tags($req["name"]));
        $sub_category = htmlspecialchars(strip_tags($req["sub_category"]));
        $parent_id = htmlspecialchars(strip_tags($req["parent_id"]));
        $status = htmlspecialchars(strip_tags($req["status"]));

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':sub_category', $sub_category);
        $stmt->bindParam(':parent_id', $parent_id);
        $stmt->bindParam(':status', $status);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;

    }
    public function getAllMainCategories()
    {
        $query = "SELECT * FROM " . $this->table . " WHERE sub_category =:sub_category AND status=:status";
        $stmt = $this->conn->prepare($query);

        $sub_category = htmlspecialchars("no");
        $status = htmlspecialchars(1);
        $stmt->bindParam(':sub_category', $sub_category);
        $stmt->bindParam(':status', $status);

        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }


    }

    public function getAllSubCategories()
    {
        $query = "SELECT * FROM " . $this->table . " WHERE sub_category =:sub_category AND status=:status";
        $stmt = $this->conn->prepare($query);

        $sub_category = htmlspecialchars("yes");
        $status = htmlspecialchars(1);
        $stmt->bindParam(':sub_category', $sub_category);
        $stmt->bindParam(':status', $status);

        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }

    }

    public function getSubSingleCategories($req = array())
    {
        $query = "SELECT * FROM " . $this->table . " WHERE parent_id =:parent_id AND status=:status";
        $stmt = $this->conn->prepare($query);
        $parent_id = htmlspecialchars(strip_tags($req["parent_id"]));
        $status = htmlspecialchars(strip_tags($req["status"]));
        $stmt->bindParam(':parent_id', $parent_id);
        $stmt->bindParam(':status', $status);

        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }
    }

    public function getAllCategories()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
      
        // Execute query
        if ($stmt->execute()) {
            return $stmt;
        }
    }

    public function deleteCategories()
    {
    }

}
