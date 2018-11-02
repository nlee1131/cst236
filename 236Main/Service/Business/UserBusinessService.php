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
    public function login(User $u) {
        $service = new UserDataService();
        $p = $u->getPassword();
        
        $user = $service->readUser($u);
        $password = $user->getPassword();

        if($user)
        {
            if(password_verify($p, $password))
            {
                return $user;
            }
            else
            {
                return false;
            }
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

    public function checkUsername($name)
    {
        $service = new UserDataService();

        if($service->checkUsername($name))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    
}

