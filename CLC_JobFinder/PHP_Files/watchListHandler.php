<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 10/24/17
 * Time: 10:21 PM
 */
session_start();
if($_SESSION["watch"]==null||isset($_SESSION["watch"])==false){
    $_SESSION["watch"] = array();
}

$id = $_GET["id"];

$_SESSION["watch"][count($_SESSION["watch"])] = $id;

include "watchList.php";