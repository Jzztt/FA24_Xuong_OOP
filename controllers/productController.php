<?php
include './models/product.php';
class ProductController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function getProducts()
    {
        $products =  $this->product->getProductsInDatabase();

        include 'views/home.php';
    }
}
