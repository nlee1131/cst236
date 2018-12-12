<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../Autoloader.php';

$service = new OrderBusinessService();

$result = $service->getOrderData();

$result = json_encode($result);

print $result;

return $result;

?>