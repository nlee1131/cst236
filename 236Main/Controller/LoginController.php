<?php

require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$username = $_POST["username"];
$password = $_POST["password"];

$u = new User(0, "", "", "", $username, $password, 0);

if($username == NULL || trim($username) == "")
{
    include "../View/_error.php";
}
elseif($password == NULL || trim($password) == "")
{
    include "../View/_error.php";
}
else 
{
    $service = new UserBusinessService();
    
    if($service->login($u))
    {
        include "../View/loginSuccess.php";
    }
    else 
    {
        include "../View/loginFail.php";
    }
}