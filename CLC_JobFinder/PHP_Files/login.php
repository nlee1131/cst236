<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 4:22 PM
 */
include "_header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body align="center" bgcolor="#f0f8ff">
<form action="loginHandler.php" method="post">
    Email:<br>
    <input name="email" type="text" required/><br>
    Password:<br>
    <input name="password" type="password" required/><br>
    <input name="login" type="submit">
</form>
<br>

</body>
</html>
