<?php


require_once "_autoloader.php";

    //form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

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

    //connect to database and input a user
$db = new Database();
    if($db->insertIntoUser($firstName, $lastName, $email, $password)) {
        //header("Location: login.php");
        $message= "Registration Successful";
        include "_error.php";
    }
    else {
        $message="Registration failed";
        include "_error.php";
    }


?>

