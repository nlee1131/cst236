<?php
include "_header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body align="center" bgcolor="#f0f8ff">

<form action="registerHandler.php" method="POST">
    First Name:<br>
    <input type="text" name="firstName"/><br>
    Last Name:<br>
    <input type="text" name="lastName"/><br>
    Email:<br>
    <input type="email" name="email"/><br>
    Password:<br>
    <input type="password" name="password" required/><br>
    <input type="submit" name="submit"/><br>
</form>
<br>


</body>
</html>