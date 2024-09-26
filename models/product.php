<?php
include './common/connect_db.php';
class Product
{

    public $connect;
    public function __construct()
    {
        $this->connect = connect_Database();
    }
    public function getProductsInDatabase()
    {
        $sql = "SELECT * FROM product";
        // Thưc thi câu sql với database
        $products = $this->connect->query($sql)->fetchAll();
        return $products;
    }
}
