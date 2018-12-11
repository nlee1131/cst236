<?php
require_once '../Autoloader.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class ProductDataService
{
    public function readProducts($name) {
        $db = new Database();
        
        $search = '%' . $name . '%';

        $sql_query = "SELECT ID, NAME, IMAGE, DESCRIPTION, PRICE FROM PRODUCT WHERE NAME LIKE ?";
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

        $stmt->bind_result($id, $n, $im, $d, $p);
        
        while($stmt->fetch())
        {
            $product = new Product($id, $n, $im, $d, $p);
            array_push($product_array, $product);
        }
        
        return $product_array;
    }

    public function findById($id) {
        $db = new Database();

        $sql_query = "SELECT ID, NAME, IMAGE, DESCRIPTION, PRICE FROM PRODUCT WHERE ID = ?";

        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $stmt->bind_param('i', $id);
        
        $stmt->execute();
        
        $stmt->store_result();

        $stmt->bind_result($id, $n, $im, $d, $p);

        $stmt->fetch();

        $product = new Product($id, $n, $im, $d, $p);

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";

        return $product;

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

    public function createProduct(Product $p)
    {
        $db = new Database();

        $sql_query = "INSERT INTO PRODUCT(NAME, IMAGE, DESCRIPTION, PRICE) VALUES(?, ?, ?, ?)";

        $stmt = $db->getConn()->prepare($sql_query);

        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }

        $n = $p->getName();
        $im = $p->getImage();
        $d = $p->getDescription();
        $pr = $p->getPrice();

        $stmt->bind_param("sssd", $n, $im, $d, $pr);
        
        $stmt->execute();

        $stmt->store_result();

        $stmt->fetch();

        $result = $stmt->affected_rows;

        return $result;
    }

    public function updateProduct(Product $p)
    {
        $db = new Database();

        # update sql query for update
        $sql_query = "UPDATE PRODUCT SET NAME = ?, IMAGE = ?, DESCRIPTION = ?, PRICE = ? WHERE ID = ?";

        $stmt = $db->getConn()->prepare($sql_query);

        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }

        $id = $p->getId();
        $n = $p->getName();
        $im = $p->getImage();
        $d = $p->getDescription();
        $pr = $p->getPrice();

        $stmt->bind_param("sssdi", $n, $im, $d, $pr, $id);
        
        $stmt->execute();

        $stmt->store_result();

        return $stmt->affected_rows;
    }

    public function deleteProduct(Product $p)
    {
        $db = new Database();

        # update sql query for delete
        $sql_query = "DELETE FROM PRODUCT WHERE ID = ?";

        $stmt = $db->getConn()->prepare($sql_query);

        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }

        $id = $p->getId();

        $stmt->bind_param("i", $id);
        
        $stmt->execute();

        $stmt->store_result();

        return $stmt->affected_rows;
    }
}








