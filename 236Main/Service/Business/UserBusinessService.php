<?php

// echo "data from Userbusinessservice.php<br>";
// echo "getcwd = : " . getcwd() . "<br>";
// echo "__DIR__ = : " . __DIR__ . "<br>";
// echo "last directories = : " .$lastdirectories . "<br>";


// echo "======================<br>";


require_once '../Autoloader.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);




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

    public function updateUser(User $u)
    {
        $service = new UserDataService();

        $result = $service->updateUser($u);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }

    public function removeUser(User $u)
    {
        $service = new UserDataService();

        $result = $service->deleteUser($u);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }

    public function addAddress(Address $a)
    {
        $service = new UserDataService();

        $result = $service->createAddress($a);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }

    public function addCreditCard(CreditCard $c)
    {
        $service = new UserDataService();

        $result = $service->createCreditCard($c);

        if ($result == 1) 
        {
            $response = true;
        }
        else
        {
            $response = false;
        }

        return $response;
    }

    public function getAllCreditCards(int $id)
    {
        $service = new UserDataService();

        $result = $service->readAllCreditCards($id);

        //$cards = json_encode($result);

        return $result;
    }

    public function getAllAddresses(int $id)
    {
        $service = new UserDataService();

        $result = $service->readAllAddresses($id);

        //$addrs = json_encode($result);

        return $result;
    }

    
}








