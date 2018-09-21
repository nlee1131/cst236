<?php
/* eShop Project
 Ver 1.55 (9-21-18)
 ====
 Joe Leon
 Nate Lee

 ===

 === */

class DBConnector
{
    public $db;

    function __construct()
    {
        $db = $this->dbConn();
    }

    function dbConn()
    {
        //ServerName, Username, Password, DBName

        //MAMP Values
        $conn = new mysqli("localhost", "root" , "root", "clcshop");

        //
        if ($conn->connect_error)
        {
            $conn = "Failed";
        }
        return $conn;
    }
}