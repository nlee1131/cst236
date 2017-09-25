<?php
require_once "Database.php";
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/20/17
 * Time: 7:55 AM
 */
class Security
{

    private $email;
    private $password;
    private $db;


    public function __construct($email, $password)
    {
        $this->email=$email;
        $this->password=$password;
        $this->db = new Database();

    }


    public function login($email, $password){
        $this->db->checkCredentials($email, $password);
        return true;
    }
}