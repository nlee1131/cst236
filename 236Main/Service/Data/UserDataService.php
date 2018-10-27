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
            echo "Error entering user info";
            return false;
        }
    }
    
    // Login
    public function readUser(User $u)
    {
        $db = new Database();
        
        $sql_query = "SELECT ID, USERNAME, PASSWORD FROM USER WHERE USERNAME = ?";
        
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $us = $u->getUsername();
        $p = $u->getPassword();
        
        $stmt->bind_param("s", $us);
        
        $stmt->execute();
        
        $stmt->store_result();
        
        $stmt->bind_result($col1, $col2, $col3);
        
        $stmt->fetch();
        
        if ($db->getConn()->error) {
            //echo "Connection failed";
            return false;
        } elseif ($stmt->affected_rows == 1) {
            if(password_verify($p, $col3)){
                $_SESSION["userID"] = $col1;
                //echo $_SESSION["userID"];
            //echo "Login Successful";
                return true;
            }
        } elseif ($stmt->affected_rows == 0) {
            //echo "User does not exist";
            return false;
        } elseif ($stmt->affected_rows > 1) {
            //echo "More than one user registered";
            return false;
        } else {
            //echo "Login failed <br>";
            //echo $stmt->affected_rows;
            return false;
        }
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
        
        
        if($stmt->affected_rows()>0){
            return true;
        }
        else
        {
            return false;
        }
        
    }
    
}

