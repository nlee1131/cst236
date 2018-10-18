<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Autoloader.php';

class Database
{

    private $dbservername;

    private $dbusername;

    private $dbpassword;

    private $dbname;

    private $conn;

    /**
     * @return mysqli
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param mysqli $conn
     */
    public function setConn($conn)
    {
        $this->conn = $conn;
    }

    public function __construct()
    {
        $this->dbservername = "localhost";
        $this->dbusername = "root";
        $this->dbpassword = "root";
        $this->dbname = "cst236clc";
        // create new connection to database
        $this->conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else
            return $this->conn;
    }

//     // Register
//     public function createUser(User $u)
//     {
//         $sql_query = $this->conn->prepare("INSERT INTO USER (FIRSTNAME, LASTNAME, EMAIL, USERNAME, PASSWORD, AGE) VALUES  (?, ?, ?, ?, ?, ?)");


//         if(!$sql_query)
//         {
//             echo "Error preparing";
//             exit;
//         }
        
        
//         $fn = $u->getFirstName();
//         $ln = $u->getLastName();
//         $e = $u->getEmail();
//         $us = $u->getUsername();
//         $p = $u->getPassword();
//         $a = $u->getAge();
        
//         $sql_query->bind_param("ssssss", $fn, $ln, $e, $us, $p, $a);
        
//         $sql_query->execute();
        
//         if ($sql_query->affected_rows > 0) {
//             //echo "You are now registered.";
//             return true;
//         } else {
//             echo "Error entering user info";
//             return false;
//         }
//     }

//     // Login
//     public function readUser(User $u)
//     {
//         $sql_query = "SELECT ID, USERNAME, PASSWORD FROM USER WHERE USERNAME = ? AND PASSWORD = ?";
        
//         $stmt = $this->conn->prepare($sql_query);
        
//         if(!$stmt)
//         {
//             echo "Error preparing";
//             exit;
//         }
        
//         $us = $u->getUsername();
//         $p = $u->getPassword();
        
//         $stmt->bind_param("ss", $us, $p);
        
//         $stmt->execute();
        
//         $stmt->store_result();
        
//         if ($this->conn->error) {
//             //echo "Connection failed";
//             return false;
//         } elseif ($stmt->affected_rows == 1) {
//             //echo "Login Successful";
//             return true;
//         } elseif ($stmt->affected_rows == 0) {
//             //echo "User does not exist";
//             return false;
//         } elseif ($stmt->affected_rows > 1) {
//             //echo "More than one user registered";
//             return false;
//         } else {
//             //echo "Login failed <br>";
//             //echo $stmt->affected_rows;
//             return false;
//         }
//     }
}

?>