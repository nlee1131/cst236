<?php

class UserService {
    function validateRegistration($firstName, $lastName, $email, $username, $password, $age) {
        if ($firstName == NULL || trim($firstName) == "") {
            $message="First name is required";
            include "../Pages/_error.php";
        }
        elseif ($lastName == NULL || trim($lastName) == "") {
            $message="Last name is required";
            include "../Pages/_error.php";
        }
        elseif($email == NULL || trim($email) == ""){
            $message="Email is required";
            include "../Pages/_error.php";
        }
        elseif($username == NULL || trim($username) == ""){
            $message="Username is required";
            include "../Pages/_error.php";
        }
        elseif($password == NULL || trim($password) == ""){
            $message="Password is required";
            include "../Pages/_error.php";
        }
        elseif($age == NULL || trim($age) == ""){
            $message="Age is required";
            include "../Pages/_error.php";
        }
    }
}