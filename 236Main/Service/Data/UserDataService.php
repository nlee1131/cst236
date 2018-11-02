<?php


// echo "data from Userdataservice.php<br>";
// echo "getcwd = : " . getcwd() . "<br>";
// echo "__DIR__ = : " . __DIR__ . "<br>";
// echo "last directories = : " .$lastdirectories . "<br>";


// echo "======================<br>";


require_once '../Autoloader.php';



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class UserDataService
{

    public function createUser(User $u)
    {
        $db = new Database();
        
        $sql_query = $db->getConn()->prepare("INSERT INTO USER (FIRSTNAME, LASTNAME, EMAIL, USERNAME, PASSWORD, AGE) VALUES  (?, ?, ?, ?, ?, ?)");
        
        
        if(!$sql_query)
        {
            echo "Error preparing";
            exit;
        }
        
        
        $fn = $u->getFirstName();
        $ln = $u->getLastName();
        $e = $u->getEmail();
        $us = $u->getUsername();
        $p = $u->getPassword();
        $a = $u->getAge();
        
        $sql_query->bind_param("ssssss", $fn, $ln, $e, $us, $p, $a);
        
        $sql_query->execute();
        
        if ($sql_query->affected_rows > 0) {
            //echo "You are now registered.";
            return true;
        } else {
            //echo "Error entering user info";
            return false;
        }
    }
    
    // Login
    public function readUser(User $u)
    {
        $db = new Database();
        
        $sql_query = "SELECT * FROM USER WHERE USERNAME = ?";
        
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $us = $u->getUsername();
        
        
        $stmt->bind_param("s", $us);
        
        $stmt->execute();
        
        $stmt->store_result();
        
        $stmt->bind_result($id, $first, $last, $email, $user, $pass, $age, $admin);
        
        $stmt->fetch();

        $user = new User($id, $first, $last, $email, $user, $pass, $age, $admin);

        return $user;  
    }
    
    public function checkUsername($name)
    {
        $db = new Database();
        
        $sql_query = "SELECT * FROM USER WHERE USERNAME = ?";
        
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $stmt->bind_param("s", $name);
        
        $stmt->execute();
        
        $stmt->store_result();
        
        $rows = $stmt->num_rows;
        
        if($rows>0)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }
    
}

