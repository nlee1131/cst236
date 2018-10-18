<?php

// echo "data from Userbusinessservice.php<br>";
// echo "getcwd = : " . getcwd() . "<br>";
// echo "__DIR__ = : " . __DIR__ . "<br>";
// echo "last directories = : " .$lastdirectories . "<br>";


// echo "======================<br>";


require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




class UserBusinessService
{
    function login(User $u) {
        $service = new UserDataService();
        
        if($service->readUser($u))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    public function register(User $u) 
    {
        $service = new UserDataService();
        
        if($service->createUser($u))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}

