<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/21/17
 * Time: 3:22 PM
 */
include "_header.php";

if(isset($_SESSION["principle"])==false || $_SESSION["principle"]==null || $_SESSION["principle"]==false){
    header("Location: login.html");
}