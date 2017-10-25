<?php

session_start();
require_once "_autoloader.php";

    //form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ccNumber = $_POST["creditCardNumber"];
    $cHName = $_POST["cardHolderName"];
    $csv = $_POST["csv"];
    $exMonth = $_POST["exMonth"];
    $exYear = $_POST["exYear"];

//make sure posted form data is valid before inserting into the database

    $utility = new Utilities();
    if($utility->validateRegistration($firstName, $lastName, $email, $password, $ccNumber, $cHName, $csv, $exMonth, $exYear)) {

        //connect to database and input a user
        $db = new Database();
        if ($db->createUser($firstName, $lastName, $email, $password) &&
            $db->enterCreditCard($ccNumber, $cHName, $csv, $exMonth, $exYear)
        ) {
            //header("Location: login.php");
            $message = "Registration Successful";
            include "_error.php";
        } else {
            $message = "Registration failed";
            include "_error.php";
        }

    }


?>

