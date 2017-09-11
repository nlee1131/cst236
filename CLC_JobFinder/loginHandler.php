<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 4:28 PM
 */
require_once "Database.php";

private $email = $_POST["email"];
private $password = $_POST["password"];

//validate data
if($email == NULL || trim($email) == "")
{
    exit("Email required");
}
elseif($password == NULL || trim($password) == "")
{
    exit("Password required");
}

else {
    $db = new Database();
    $db->checkCredentials();
}
?>