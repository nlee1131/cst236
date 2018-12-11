<?php

//session_start();
require_once '../View/_header.php';

//echo session_id();

require_once '../Autoloader.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$city = $_POST["city"];
$state = $_POST["state"];
$postal = $_POST["postal"];
$addrType = $_POST["addrType"];

$addr = new Address(0, $_SESSION["userID"], $addr1, $addr2, $city, $state, $postal, $addrType);

if($addr1 == NULL || trim($addr1) == "")
{
    include "../View/_error.php";
}
elseif($city == NULL || trim($city) == "")
{
    include "../View/_error.php";
}
elseif($state == NULL || trim($state) == "")
{
    include "../View/_error.php";
}
elseif($postal == NULL || trim($postal) == "")
{
    include "../View/_error.php";
}
else
{
	$service = new UserBusinessService();

	$result = $service->addAddress($addr);

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