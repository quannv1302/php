<?php
require_once './models/Product.php';

class HomeController
{
    public function index()
    {   
        $products = Product::all();
        include_once './views/client/homepage.php';
    }
}



?>