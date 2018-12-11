<?php

//session_start();
require_once '../View/_header.php';

//echo session_id();

require_once '../Autoloader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ccNum = $_POST["cc"];
$csv = $_POST["csv"];
$exM = $_POST["exmon"];
$exY = $_POST["exyear"];

$cc = new CreditCard(0, $ccNum, $csv, $exM, $exY, $_SESSION["userID"]);

if($ccNum == NULL || trim($ccNum) == "")
{
    include "../View/_error.php";
}
elseif($csv == NULL || trim($csv) == "")
{
    include "../View/_error.php";
}
elseif($exM == NULL || trim($exM) == "")
{
    include "../View/_error.php";
}
elseif($exY == NULL || trim($exY) == "")
{
    include "../View/_error.php";
}
else
{
	$service = new UserBusinessService();

	$result = $service->addCreditCard($cc);

	if($result)
	{
		require_once '../View/_success.php';
	}
	else
	{
		require_once '../View/_error.php';
	}
	
}

?>