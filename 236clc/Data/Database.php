<?php
namespace Data;

class Database
{
    private $dbservername;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    private $conn;
    
    public function __construct()
    {
        $this->dbservername = "localhost";
        $this->dbusername = "root";
        $this->dbpassword = "root";
        $this->dbname = "CLC";
        //create new connection to database
        $this->conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($this->conn->connect_error)
        {
            die("Connection failed: " .$this->conn->connect_error);
        }
        else return $this->conn;
    }
    
}

