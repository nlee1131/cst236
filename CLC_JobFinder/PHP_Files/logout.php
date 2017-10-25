<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 10/8/17
 * Time: 11:45 PM
 */
session_start();
$_SESSION["principle"] = false;
$_SESSION["watch"] = null;
session_unset();
session_destroy();

include "index.php";
?>