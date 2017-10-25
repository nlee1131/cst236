<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 10/24/17
 * Time: 10:10 PM
 */
include "_header.php";
require_once "_autoloader.php";

$db = new Database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watchlist</title>
    <link rel="stylesheet" href="../CSS/pageStyle.css">
</head>
<body>
<table>
<?php
for($i = 0; $i < count($_SESSION["watch"]); $i++) {
    $id = $_SESSION["watch"][$i];
    $job = $db->getJobById($id);
    if($job != null){
        echo "<tr>";
        echo "<td>";
        echo "<a href= '../PHP_Files/jobDescription.php?id=" . $id . "'>" . $job->getName() . "</a>";
        echo "</td>";
        echo "</tr>";
    }
    else{
        echo "<tr><td>Invalid job</td></tr>";
    }
}
?>
</table>
</body>
</html>
