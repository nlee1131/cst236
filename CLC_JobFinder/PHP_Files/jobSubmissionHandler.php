<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/24/17
 * Time: 8:32 PM
 */
require_once "_autoloader.php";

    $jobName = $_POST["jobName"];
    $jobDescription = $_POST["jobDescription"];
    $jobImage = $_POST["imageSource"];

//make sure posted form data is valid before inserting into the database
if ($jobName == NULL || trim($jobName) == "") {
    $message="Job name is required";
    include "_error.php";
}
elseif ($jobDescription == NULL || trim($jobDescription) == "") {
    $message="Job description is required";
    include "_error.php";
}
elseif ($jobImage == NULL || trim($jobImage) == "") {
    $message="Job image source is required";
    include "_error.php";
}

//Input job to database
$db = new Database();
if($db->createJob($jobName, $jobDescription)) {
    //header("Location: login.php");
    $message= "Registration Successful";
    include "_error.php";
}
else {
    $message="Registration failed";
    include "_error.php";
}

