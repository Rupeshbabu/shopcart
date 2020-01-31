<?php

class Users
{
    // DB Stuff
    private $conn;
    private $table = 'users';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function checkEmail($req = array())
    {
        $query = "SELECT email FROM " . $this->table . " WHERE email = '" . $req['email'] . "'";
        $checkResult = $this->conn->prepare($query);
        if ($checkResult->execute()) {
            return $checkResult;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $checkResult->error);
        return false;
    }

    public function createUser($req = array())
    {
        $query = "INSERT INTO " . $this->table . " SET user_uni_id=:user_uni_id,
        username=:username, email=:email, phone=:phone, gender=:gender, dob=:dob, pwd=:pwd,
        status=:status, email_conf=:email_conf,added_date=:added_date";
        $stmt = $this->conn->prepare($query);

        $username = htmlspecialchars(strip_tags($req["username"]));
        $user_uni_id = htmlspecialchars(strip_tags($req["user_uni_id"]));
        $email = htmlspecialchars(strip_tags($req["email"]));
        $phone = htmlspecialchars(strip_tags($req["phone"]));
        $gender = htmlspecialchars(strip_tags($req["gender"]));
        $dob = htmlspecialchars(strip_tags($req["dob"]));
        $pwd = htmlspecialchars(strip_tags($req["password"]));
        $status = htmlspecialchars(strip_tags($req["status"]));
        $email_conf = htmlspecialchars(strip_tags($req["email_conf"]));
        $added_date = htmlspecialchars(strip_tags($req["added_date"]));


        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':user_uni_id', $user_uni_id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':email_conf', $email_conf);
        $stmt->bindParam(':added_date', $added_date);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;

    }

    public function loginUser($req=array())
    {
        $query ="SELECT * FROM ". $this->table . " WHERE email=:email AND pwd=:pwd";

        $stmt = $this->conn->prepare($query);

        $email = htmlspecialchars(strip_tags($req["email"]));
        $pwd = htmlspecialchars(strip_tags($req["password"]));

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwd', $pwd);

        if ($stmt->execute()) {
            return $stmt;
        }

        // Print error if something goes wrong
        printf("Error: .\n", $stmt->error);
        return false;


    }

    public function updateUserDetails()
    {
    }

    public function deleteUser()
    {
    }

    public function changePassword()
    {
    }

    public function confirmEmail()
    {
    }

    public function getUser()
    {
    }


    // Admin functions here

    public function getAllUsers()
    {
    }

    public function getUserByAdmin()
    {
    }
}
