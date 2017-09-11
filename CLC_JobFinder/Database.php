<?php

/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 5:27 PM
 */
class Database
{

    private $dbservername;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    private $conn;

    public function __construct()
    {
        $this->dbservername = "204.152.255.27";
        $this->dbusername = "nleebhos_400IM";
        $this->dbpassword = "legoman27";
        $this->dbname = "nleebhos_JobFinder";
        $this->conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($this->conn->connect_error)
        {
            die("Connection failed: " .$this->conn->connect_error);
        }
        else return $this->conn;
    }



    public function insert($firstName, $lastName, $email, $password)
    {

        $sql = "INSERT INTO users (FIRSTNAME, LASTNAME, EMAIL, PASSWORD)
                VALUES ('" . $firstName . "' , '" . $lastName . "' , '" . $email . "' , '" . $password . "')";
        if ($this->conn->query($sql) == TRUE) {
            echo "You are now registered.";
            return true;
        } else {
            return false;
        }


    }

    public function checkCredentials($email, $password)
    {

        $sql = "SELECT ID, EMAIL, PASSWORD
                FROM users WHERE " . " BINARY EMAIL='" . $email . "' AND " . " BINARY PASSWORD='" . $password . "'";
        $result = $this->conn->query($sql);
        if ($this->conn->error) {
            echo "Connection failed";
            return false;
        } elseif ($result->num_rows == 1) {
            echo "Login Successful";
            return true;
        } elseif ($result->num_rows == 0) {
            echo "User does not exist";
            return false;
        } elseif ($result->num_rows > 1) {
            echo "More than one user registered";
            return false;
        } else {
            echo "Login failed";
            return false;
        }
    }


}