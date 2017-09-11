<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 4:28 PM
 */
require_once "Database.php";

$email = $_POST["email"];
$password = $_POST["password"];

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
    if($db->checkCredentials($email, $password))
    {
        //echo "Login successful";
    }
    else echo "false";
}
?>
<a href="index.php">Home</a>
