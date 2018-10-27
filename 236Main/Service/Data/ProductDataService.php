<?php
require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ProductDataService
{
    public function readProducts($name) {
        $db = new Database();
        
        $search = '%' . $name . '%';

        $sql_query = "SELECT NAME, DESCRIPTION, PRICE FROM PRODUCT WHERE NAME LIKE ?";
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $stmt->bind_param('s', $search);
        
        $stmt->execute();
        
        $stmt->store_result();    
        
        $product_array = Array();

        $stmt->bind_result($n, $d, $p);
        
        while($stmt->fetch())
        {
            $product = new Product(NULL, $n, NULL, $d, $p);
            array_push($product_array, $product);
        }
        
        return $product_array;
    }
    
    public function readAllProducts() {
        $db = new Database();
        
        $sql_query = "SELECT NAME, DESCRIPTION, PRICE FROM PRODUCT";
        
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $stmt->execute();
        
        $stmt->store_result();
        
        $product_array = Array();
        
        $stmt->bind_result($n, $d, $p);
        
        while($stmt->fetch())
        {
            $product = new Product(NULL, $n, NULL, $d, $p);
            array_push($product_array, $product);
        }
        
        return $product_array;
    }
}

