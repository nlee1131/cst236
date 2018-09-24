<?php

session_start();
require_once "_autoloader.php";

//form data
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$age = $_POST["age"];

$service = new UserService();

if ($service->validateRegistration($firstName, $lastName, $email, $username, $password, $age)) {
    
}

?>