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

    public function __construct($dbservername, $dbusername, $dbpassword, $dbname)
    {
        $this->dbservername = "localhost";
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
        if ($this->conn->query($sql) === TRUE) {
            echo "You are now registered.";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();
    }

    public function checkCredentials($email, $password)
    {

        $sql = "SELECT ID, EMAIL, PASSWORD
        FROM users WHERE " . " BINARY USERNAME='" . $email . "' AND " . " BINARY PASSWORD='" . $password . "'";
        $result = $this->conn->query($sql);
        if ($this->conn->error) {
            echo "Connection failed";
        } elseif ($result->num_rows == 1) {
            echo "Login Successful";
        } elseif ($result->num_rows == 0) {
            echo "User does not exist";
        } elseif ($result->num_rows > 1) {
            echo "More than one user registered";
        } else {
            echo "Login failed";
        }
    }


}