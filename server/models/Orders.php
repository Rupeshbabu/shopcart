<?php

class Orders
{
    // DB Stuff
    private $conn;
    private $table = 'orders';

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function createOrder()
    {
    }
    public function getAllOrdersByAdmin()
    {
    }

    public function updateOrders()
    {
    }

    public function getOrderByAdmin()
    {
    }

    public function deleteOrder()
    {
    }

    // user here


    public function getOrderByUser()
    {
    }

    public function getAllOrdersByUser()
    {
    }
}
