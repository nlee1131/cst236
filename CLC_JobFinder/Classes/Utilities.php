<?php

require_once "Database.php";
require_once "Job.php";
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/25/17
 * Time: 9:02 AM
 */
class Utilities
{

    public function validateRegistration($firstName, $lastName, $email, $password, $ccNumber, $cHName, $csv, $exMonth, $exYear){
        if ($firstName == NULL || trim($firstName) == "") {
            $message="First name is required";
            include "../PHP_Files/_error.php";
        }
        elseif ($lastName == NULL || trim($lastName) == "") {
            $message="Last name is required";
            include "../PHP_Files/_error.php";
        }
        elseif($email == NULL || trim($email) == ""){
            $message="Email is required";
            include "../PHP_Files/_error.php";
        }
        elseif($password == NULL || trim($password) == ""){
            $message="Password is required";
            include "../PHP_Files/_error.php";
        }
        elseif($ccNumber == NULL || trim($ccNumber) == ""){
            $message="Credit card number is required";
            include "../PHP_Files/_error.php";
        }
        elseif($cHName == NULL || trim($cHName) == ""){
            $message="Card holder name is required";
            include "../PHP_Files/_error.php";
        }
        elseif($csv == NULL || trim($csv) == ""){
            $message="CSV is required";
            include "../PHP_Files/_error.php";
        }
        elseif($exMonth == NULL || trim($exMonth) == ""){
            $message="Expiration month is required";
            include "../PHP_Files/_error.php";
        }
        elseif($exYear == NULL || trim($exYear) == ""){
            $message="Expiration year is required";
            include "../PHP_Files/_error.php";
        }
    }

    public function listJobs(){
        $db = new Database();
        $jobs = $db->getJobs();
        echo "<table>";
        for($i = 0; $i < count($jobs); $i++){
            echo "<tr>";
            echo "<td>";
            echo "<a href= '../PHP_Files/jobDescription.php?id=" . $jobs[$i]->getId() . "'>" . $jobs[$i]->getName() . "</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}