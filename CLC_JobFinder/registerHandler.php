<?php
//save form data
require_once "Database.php";


    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

//make sure posted form data is valid before inserting into the database
    if ($firstName == NULL || trim($firstName) == "") {
        exit("First name is required");
    }
    elseif ($lastName == NULL || trim($lastName) == "") {
        exit("Last name is required");
    }
    elseif($email == NULL || trim($email) == ""){
        exit("Email is required");
    }
    elseif($password == NULL || trim($password) == ""){
        exit("Password is required");
    }

$db = new Database();
    if($db->insert($firstName, $lastName, $email, $password))
        echo "";
    else echo "Error";


?>
<a href="index.php">Home</a>
