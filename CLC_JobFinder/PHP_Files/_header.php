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
    <?php
    if(isset($_SESSION["principle"])==false || $_SESSION["principle"]==null || $_SESSION["principle"]==false){
        ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>

        <?php
        }
    else {
        ?>
        <li><a href="jobCategories.php">Job Categories</a></li>
        <li><a href="jobListPage.php">Job List</a></li>
        <li><a href="watchList.php">Watch List</a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php
    }
    ?>
</ul>
