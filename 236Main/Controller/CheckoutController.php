<?php

require_once '../Autoloader.php';
session_start();


$ccID = $_POST["CreditCard"];
$addrID = $_POST["Address"];
$cart = $_SESSION["cart"];
$userID = $_SESSION["userID"];


$service = new OrderBusinessService();

$result = $service->placeOrder($cart, $ccID, $addrID, $userID);

if($result)
{
	$_SESSION["cart"] = new Cart($userID);
	require_once '../View/_success.php';
}
else
{
	require_once '../View/_error.php';
}
?>