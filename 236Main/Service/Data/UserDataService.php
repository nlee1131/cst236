<?php


// echo "data from Userdataservice.php<br>";
// echo "getcwd = : " . getcwd() . "<br>";
// echo "__DIR__ = : " . __DIR__ . "<br>";
// echo "last directories = : " .$lastdirectories . "<br>";


// echo "======================<br>";


require_once '../Autoloader.php';



// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


class UserDataService
{

/**
Interact with USER table
*/
    public function createUser(User $u)
    {
        $db = new Database();
        
        $sql_query = $db->getConn()->prepare("INSERT INTO USER (FIRSTNAME, LASTNAME, EMAIL, USERNAME, PASSWORD, AGE) VALUES (?, ?, ?, ?, ?, ?)");
        
        
        if(!$sql_query)
        {
            echo "Error preparing";
            exit;
        }
        
        
        $fn = $u->getFirstName();
        $ln = $u->getLastName();
        $e = $u->getEmail();
        $us = $u->getUsername();
        $p = $u->getPassword();
        $a = $u->getAge();
        
        $sql_query->bind_param("ssssss", $fn, $ln, $e, $us, $p, $a);
        
        $sql_query->execute();
        
        if ($sql_query->affected_rows > 0) {
            //echo "You are now registered.";
            return true;
        } else {
            //echo "Error entering user info";
            return false;
        }
    }
    
    // Login
    public function readUser(User $u)
    {
        $db = new Database();
        
        $sql_query = "SELECT * FROM USER WHERE USERNAME = ?";
        
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $us = $u->getUsername();
        
        
        $stmt->bind_param("s", $us);
        
        $stmt->execute();
        
        $stmt->store_result();
        
        $stmt->bind_result($id, $first, $last, $email, $user, $pass, $age, $admin);
        
        $stmt->fetch();

        $user = new User($id, $first, $last, $email, $user, $pass, $age, $admin);

        return $user;  
    }
    
    public function checkUsername($name)
    {
        $db = new Database();
        
        $sql_query = "SELECT * FROM USER WHERE USERNAME = ?";
        
        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $stmt->bind_param("s", $name);
        
        $stmt->execute();
        
        $stmt->store_result();
        
        $rows = $stmt->num_rows;
        
        if($rows>0)
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
        $db = new Database();

        # update sql query for update
        $sql_query = "UPDATE USER SET FIRSTNAME = ?, LASTNAME = ?, EMAIL = ?, USERNAME = ?, PASSWORD = ?, AGE = ?, ADMIN = ? WHERE ID = ?";

        $stmt = $db->getConn()->prepare($sql_query);

        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }

        $id = $u->getId();
        $fn = $u->getFirstName();
        $ln = $u->getLastName();
        $e = $u->getEmail();
        $us = $u->getUsername();
        $p = $u->getPassword();
        $a = $u->getAge();
        $ad = $u->getAdmin();

        $stmt->bind_param("sssssiii", $fn, $ln, $e, $us, $p, $a, $ad, $id);
        
        $stmt->execute();

        $stmt->store_result();

        return $stmt->affected_rows;
    }

    public function deleteUser(User $u)
    {
        $db = new Database();

        # update sql query for delete
        $sql_query = "DELETE FROM USER WHERE ID = ?";

        $stmt = $db->getConn()->prepare($sql_query);

        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }

        $id = $u->getId();

        $stmt->bind_param("i", $id);
        
        $stmt->execute();

        $stmt->store_result();

        return $stmt->affected_rows;
    }
# END USER table interaction

    public function createAddress(Address $a)
    {
        $db = new Database();
        
        $sql_query = "INSERT INTO ADDRESS (ID, USER_ID, ADDR1, ADDR2, CITY, STATE, POSTAL, BILLING) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $db->getConn()->prepare($sql_query);
        
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
        
        $id = $a->getId();
        $user = $a->getUserID();
        $addr1 = $a->getAddr1();
        $addr2 = $a->getAddr2();
        $city = $a->getCity();
        $state = $a->getState();
        $postal = $a->getPostalCode();
        $bill = $a->getBilling();
        
        
        $stmt->bind_param("iissssii", $id, $user, $addr1, $addr2, $city, $state, $postal, $bill);
        
        $stmt->execute();

        return $stmt->affected_rows;
    }
    
    public function createCreditCard(CreditCard $c)
    {
        $db = new Database();
        
        $sql_query = "INSERT INTO CREDIT_CARD (ID, CC_NUM, CSV, EX_MON, EX_YEAR, USER) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $db->getConn()->prepare($sql_query);       
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }
      
        $id = $c->getId();
        $ccNum = $c->getCcNum();
        $csv = $c->getCsv();
        $exM = $c->getExM();
        $exY = $c->getExY();
        $user = $c->getUser();
 
        $stmt->bind_param("iiiiii", $id, $ccNum, $csv, $exM, $exY, $user);

        $stmt->execute();

        // print_r($ccNum);

        // print_r($stmt->affected_rows);

        return $stmt->affected_rows;
    }

    public function readAllCreditCards(int $id)
    {
        $db = new Database();

        $sql_query = "SELECT ID, CC_NUM, CSV, EX_MON, EX_YEAR, USER FROM CREDIT_CARD WHERE USER = ?";

        $stmt = $db->getConn()->prepare($sql_query);
        
        if(!$stmt)
        {
            echo "Error preparing";
            exit;
        }

        $stmt->bind_param("i", $id);

        $stmt->execute();

        $stmt->store_result();

        $creditCardArray = [];

        $stmt->bind_result($id, $ccNum, $csv, $eM, $eY, $user);

        $i = 0;
        while($stmt->fetch())
        {
            $cc = new CreditCard($id, $ccNum, $csv, $eM, $eY, $user);
            $creditCardArray[$i] = $cc;
            $i++;
        }
        //print_r($creditCardArray);
        //$dto = new DTO(0, $creditCardArray);
        return $creditCardArray;
    }

    public function readAllAddresses(int $id)
    {
        $db = new Database();

        $sql_query = "SELECT ID, USER_ID, ADDR1, ADDR2, CITY, STATE, POSTAL, BILLING FROM ADDRESS WHERE USER_ID = ?";

        $stmt = $db->getConn()->prepare($sql_query);

        if(!$stmt)
        {
            //echo "Error preparing";
            exit("Error preparing");
        }

        $stmt->bind_param("i", $id);

        $stmt->execute();

        $stmt->store_result();

        $addressArray = [];

        $stmt->bind_result($id, $userID, $addr1, $addr2, $city, $state, $postal, $billing);
        $i = 0;
        while($stmt->fetch())
        {
            $addr = new Address($id, $userID, $addr1, $addr2, $city, $state, $postal, $billing);
            $addressArray[$i] = $addr;
            $i++;
        }

        //$dto = new DTO(0, $addressArray);
        return $addressArray;
    }
}






