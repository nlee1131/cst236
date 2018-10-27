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


}

?>