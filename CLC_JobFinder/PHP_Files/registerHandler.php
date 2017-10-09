<?php


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
    if ($firstName == NULL || trim($firstName) == "") {
        $message="First name is required";
        include "_error.php";
    }
    elseif ($lastName == NULL || trim($lastName) == "") {
        $message="Last name is required";
        include "_error.php";
    }
    elseif($email == NULL || trim($email) == ""){
        $message="Email is required";
        include "_error.php";
    }
    elseif($password == NULL || trim($password) == ""){
        $message="Password is required";
        include "_error.php";
    }
    elseif($ccNumber == NULL || trim($ccNumber) == ""){
        $message="Credit card number is required";
        include "_error.php";
    }
    elseif($cHName == NULL || trim($cHName) == ""){
        $message="Card holder name is required";
        include "_error.php";
    }
    elseif($csv == NULL || trim($csv) == ""){
        $message="CSV is required";
        include "_error.php";
    }
    elseif($exMonth == NULL || trim($exMonth) == ""){
        $message="Expiration month is required";
        include "_error.php";
    }
    elseif($exYear == NULL || trim($exYear) == ""){
        $message="Expiration year is required";
        include "_error.php";
    }

    //connect to database and input a user
$db = new Database();
    if($db->createUser($firstName, $lastName, $email, $password) &&
        $db->enterCreditCard($ccNumber, $cHName, $csv, $exMonth, $exYear)) {
        //header("Location: login.php");
        $message= "Registration Successful";
        include "_error.php";
    }
    else {
        $message="Registration failed";
        include "_error.php";
    }


?>

