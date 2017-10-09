<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/20/17
 * Time: 8:03 AM
 */
session_start();

?>
<style>
    <?php
        include "../CSS/pageStyle.css";
    ?>
</style>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="jobCategories.php">Job Categories</a></li>
    <li><a href="jobListPage.php">Job List</a></li>
    <!-- Insert php statement to get admin privilages
    <?php
    //if($_SESSION)
    ?>
    -->
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
</ul>
