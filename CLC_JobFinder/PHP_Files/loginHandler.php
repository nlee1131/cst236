<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 4:28 PM
 */

require_once "_autoloader.php";

$email = $_POST["email"];
$password = $_POST["password"];

//validate data
if($email == NULL || trim($email) == "")
{
    $message = "Email required";
    include "_error.php";
}
elseif($password == NULL || trim($password) == "")
{
    $message = "Password required";
    include "_error.php";
}

else {
    $security = new Security($email, $password);
    if($security->login($email, $password))
    {
        $message= "Login Successful";
        include "_error.php";
    }
    else {
        $message="Login Failed";
        include "_error.php";
    }
}
?>
