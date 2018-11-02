<?php

session_start();

$_SESSION["userID"] = null;
$_SESSION["adminCode"] = null;

session_unset();

session_destroy();

include 'index.php';
?>