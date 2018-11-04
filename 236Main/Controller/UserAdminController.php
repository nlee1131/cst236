<?php
require_once '../View/_header.php';

require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$operation = $_POST["operation"];
$id = $_POST["id"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$age = $_POST["age"];
$admin = $_POST["admin"];

$hashed = password_hash($password, PASSWORD_DEFAULT);

$u = new User($id, $firstName, $lastName, $email, $username, $hashed, $age, $admin);

if ($operation == 1) 
{
	$service = new UserBusinessService();

	$result = $service->updateUser($u);

	if($result)
	{
		require_once '../View/_success.php';
	}
	else
	{
		require_once '../View/_error.php';
	}
}
if ($operation == 2) 
{
	$service = new UserBusinessService();

	$result = $service->removeUser($u);

	if($result)
	{
		require_once '../View/_success.php';
	}
	else
	{
		require_once '../View/_error.php';
	}
}


?>