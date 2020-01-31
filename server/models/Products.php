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
}
