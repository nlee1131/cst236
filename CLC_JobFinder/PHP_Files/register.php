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
    <table align="center">
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstName" required maxlength="45" minlength="2"/></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastName" required maxlength="45" minlength="2"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required maxlength="50" minlength="5"/></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required maxlength="50" minlength="8"/></td>
        </tr>
        <tr>
            <td>Credit Card Number:</td>
            <td><input type="number" name="creditCardNumber" minlength="16" maxlength="16" required/></td>
        </tr>
        <tr>
            <td>Name On Card:</td>
            <td><input type="text" name="cardHolderName" required maxlength="100" minlength="4"/></td>
        </tr>
        <tr>
            <td>CSV:</td>
            <td><input type="number" name="csv" minlength="3" maxlength="3" required/></td>
        </tr>
        <tr>
            <td>Expiration Month:</td>
            <td><input type="number" name="exMonth" minlength="2" maxlength="2" required/></td>
        </tr>
        <tr>
            <td>Expiration Year:</td>
            <td><input type="number" name="exYear" minlength="2" maxlength="2" required/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit"/><br></td>
        </tr>
    </table>
</form>
<br>



</body>
</html>