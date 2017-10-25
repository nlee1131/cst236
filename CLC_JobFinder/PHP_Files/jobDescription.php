<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/21/17
 * Time: 3:24 PM
 */
include "_header.php";
require_once "_autoloader.php";
$id = $_GET["id"];
$db = new Database();
$job = $db->getJobById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Description</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body>
<?php
if($job==null){
    ?>
    <h1>There are no jobs with that ID</h1>
<?php
}
else {
    ?>
    <table>
    <tr><td><h1><?=$job->getName()?></h1></td></tr>
    <tr><td><img src="<?=$job->getImage()?>"/></td></tr>
    <tr><td><h3><?=$job->getDescription()?></h3></td></tr>
    <tr><td>
    <form method='post' action='watchListHandler.php?id=<?=$job->getId()?>'>
    <input type='submit' value='Add to watchlist'/>
    </form>
    </td></tr>
    <?php
}
?>
</body>
</html>
