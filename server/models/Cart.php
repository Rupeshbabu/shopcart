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

    public function addItem()
    {
    }
    public function deleteItem()
    {
    }

    public function updateItem()
    {
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
