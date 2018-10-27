<?php
require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ProductBusinessService
{
    function search($term) {
        $service = new ProductDataService();
        
        $products = Array();
        
        $products = $service->readProducts($term);
        
        return $products;
    }
    
    function findAll() {
        $service = new ProductDataService();
        
        $products = Array();
        
        $products = $service->readAllProducts();
        
        return $products;
    }
}

