<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/24/17
 * Time: 8:31 PM
 */

include "_header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Job</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body align="center" bgcolor="#f0f8ff">

<form action="jobSubmissionHandler.php" method="POST">
    Job Name:<br>
    <input type="text" name="jobName"/><br>
    Description:<br>
    <textarea name="jobDescription" rows="5" cols="100" minlength="10" maxlength="1000"></textarea>
    <input type="submit" name="submit"/><br>
</form>
<br>


</body>
</html>