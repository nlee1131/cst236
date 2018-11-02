<?php
session_start();
print_r(session_id());
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>


<?php

print_r($_SESSION);
echo session_status();
//echo isset($_SESSION["userID"]);

if(isset($_SESSION["userID"])==false || $_SESSION["userID"]==null || $_SESSION["userID"]==false)
{
	//echo $_SESSION["userID"];
	include 'navbarNoLogin.php';
}
else
{
	if($_SESSION["adminCode"]==1 && $_SESSION["adminCode"] != null)
	{
		include 'navbarAdmin.php';
	}
	else
	{
		include 'navbarLoggedIn.php';
	}
}
?>
