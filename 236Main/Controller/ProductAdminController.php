<?php 
require_once '../View/_header.php';

require_once '../Autoloader.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$operation = $_POST["operation"];
$id = $_POST["id"];
$name = $_POST["name"];
$image = $_POST["image"];
$description = $_POST["description"];
$price = $_POST["price"];

$p = new Product($id, $name, $image, $description, $price);

if ($operation == 1) 
{
	$service = new ProductBusinessService();

	$result = $service->addProduct($p);

	if($result)
	{
		require_once '../View/_success.php';
	}
	else
	{
		require_once '../View/_error.php';
	}
}
elseif ($operation == 2) 
{
	$service = new ProductBusinessService();

	$result = $service->updateProduct($p);

	if($result)
	{
		require_once '../View/_success.php';
	}
	else
	{
		require_once '../View/_error.php';
	}
}
elseif ($operation == 3) 
{
	$service = new ProductBusinessService();

	$result = $service->removeProduct($p);

	if($result)
	{
		require_once '../View/_success.php';
	}
	else
	{
		require_once '../View/_error.php';
	}
}
else
{
	require_once '../View/_error.php';
}
?>