<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/21/17
 * Time: 3:24 PM
 */
include "_header.php";
require_once "_autoloader.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job List</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body>

<!--
<?php

//$job->listJobs();
?>
-->


<button class="accordion"><a href="jobDescription.php?id=<?=$row["ID"]?>"><?=$row["JOB_NAME"]?></a>Job 1</button>
<div class="Job 1">
    <p>
        Hello world, I am the first job!
    </p>
</div>

<button class="accordion">Job 2</button>
<div class="Job 2">
    <p>
        Hello world, I am the second job!
    </p>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }
</script>


</body>
</html>
