<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Autoloader.php';

$service = new ProductBusinessService();

$products = Array();

$products = $service->findAll();

if($products)
{
    include '../View/displayProducts.php';
}
else
{
    include '../View/_error.php';
}