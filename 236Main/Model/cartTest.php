<?php 

require_once '../Autoloader.php';
session_start();
$c = new Cart(16);


$service = new ProductBusinessService();


$prod1 = $service->findById(12);
$prod2 = $service->findById(15);


echo "<pre>";
print_r($prod1);
echo "</pre>";
echo "<pre>";
print_r($prod2);
echo "</pre>";

$c->addItem(12);
$c->addItem(24);

echo "<pre>";
print_r($c);
echo "</pre>";

$c->calcTotal();

echo "<pre>";
print_r($c);
echo "</pre>";

echo "<pre>";
print_r($_SESSION["cart"]);
echo "</pre>";

?>