<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 4:21 PM
 */
include "_header.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body align="center" bgcolor="#f0f8ff">
<h1>Welcome to Job Finder!</h1>
<h6>Welcome IP user: <?php echo $ipaddress ?></h6>
</body>
</html>

