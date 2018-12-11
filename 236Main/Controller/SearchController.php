<?php
require_once '../View/_header.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once '../Autoloader.php';

$search = $_POST["search"];

$service = new ProductBusinessService();

$products = Array();

$products = $service->search($search);

if($products)
{
    include '../View/displayProducts.php';
}
else 
{
    include '../View/_error.php';
}