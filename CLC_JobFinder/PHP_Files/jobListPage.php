<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/21/17
 * Time: 3:24 PM
 */
include "_header.php";
require_once "_autoloader.php";

$job = new Utilities();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job List</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body>


<?php

$job->listJobs();
?>





</body>
</html>
