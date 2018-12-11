<?php 
session_start();
require_once '../Autoloader.php';

$userID = $_SESSION["userID"];

$service = new UserBusinessService();

$result = $service->getAllCreditCards($userID);

$result = json_encode($result);

print $result;

return $result;

?>