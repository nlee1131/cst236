<?php

require_once '../Autoloader.php';
require_once '../View/_header.php';



// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


$prod_id = $_POST["add"];
// echo "<pre>";
// print_r($prod_id);
// echo "</pre>";

if (isset($_SESSION["cart"])) 
{
	$c = $_SESSION["cart"];
}
else
{
	$c = new Cart($_SESSION["userID"]);
}


$c->addItem($prod_id);
$c->calcTotal();

$_SESSION["cart"] = $c;

// echo "<pre>";
// print_r($_SESSION["cart"]);
// echo "</pre>";

return true;

//include_once '../View/shoppingCart.php';
?>