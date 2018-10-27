<?php
require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = $_POST["username"];

if(!empty($user)){
    $service = new UserDataService();
    
    $result = $service->checkUsername($user);
    
    if(!$result){
        echo "<span class='status-available'> Username Available.</span>";
    }
    else 
    {
        echo "<span class='status-not-available'> Username Not Available.</span>";
    }
}
else 
{
    echo "Attempting check of username is failing";
}