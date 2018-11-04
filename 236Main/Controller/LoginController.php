<?php

//session_start();
require_once '../View/_header.php';

//echo session_id();

require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$username = $_POST["username"];
$password = $_POST["password"];

$u = new User(0, "", "", "", $username, $password, 0, 0);

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

    $result = $service->login($u);
    //print_r($result);
    if($result)
    {
        $_SESSION["userID"] = $result->getId();
        $_SESSION["adminCode"] = $result->getAdmin();
        //print_r(session_id());
        print_r($_SESSION);
        //session_commit();
        include "../View/loginSuccess.php";
    }
    else 
    {
        $_SESSION["userID"] = null;
        $_SESSION["adminCode"] = null;
        include "../View/loginFail.php";
    }
}