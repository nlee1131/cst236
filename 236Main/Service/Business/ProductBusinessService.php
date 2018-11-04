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

    function addProduct(Product $p)
    {
        $service = new ProductDataService();

        $result = $service->createProduct($p);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }

    function updateProduct(Product $p)
    {
        $service = new ProductDataService();

        $result = $service->updateProduct($p);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }

    function removeProduct(Product $p)
    {
        $service = new ProductDataService();

        $result = $service->deleteProduct($p);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }
}

