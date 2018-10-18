<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Autoloader.php';



$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$age = $_POST["age"];

$u = new User(0, $firstName, $lastName, $email, $username, $password, $age);

if($firstName == NULL || trim($firstName) == "")
{
    $message = "First name required";
    include "_error.php";
}
elseif($lastName == NULL || trim($lastName) == "")
{
    $message = "Last name required";
    include "_error.php";
}
elseif($email == NULL || trim($email) == "")
{
    $message = "Email required";
    include "_error.php";
}
elseif($username == NULL || trim($username) == "")
{
    $message = "Username required";
    include "_error.php";
}
elseif($password == NULL || trim($password) == "")
{
    $message = "Password required";
    include "_error.php";
}
elseif($age == NULL || trim($age) == "")
{
    $message = "Age required";
    include "_error.php";
}
else 
{
    $service = new UserBusinessService();
    
    if($service->register($u))
    {
        include "../View/registerSuccess.php";
    }
    else
    {
        include "../View/registerFail.php";
    }
}






