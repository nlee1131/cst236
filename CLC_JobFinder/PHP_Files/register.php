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
    <input type="text" name="firstName" required/><br>
    Last Name:<br>
    <input type="text" name="lastName" required/><br>
    Email:<br>
    <input type="email" name="email" required/><br>
    Password:<br>
    <input type="password" name="password" required/><br>

    Credit Card Number:<br>
    <input type="number" name="creditCardNumber" required/><br>
    Name on card:<br>
    <input type="text" name="cardHolderName" required/><br>
    CSV:<br>
    <input type="number" name="csv" required/><br>
    Expiration month:<br>
    <input type="number" name="exMonth" required/><br>
    Expiration year:<br>
    <input type="number" name="exYear" required/><br>
    <input type="submit" name="submit"/><br>
</form>
<br>



</body>
</html>