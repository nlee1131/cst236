<?php
require_once '../Autoloader.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/**
 * 
 */
class OrderBusinessService
{
	
	public function placeOrder(Cart $c, int $ccID, int $addrID, int $userID)
	{
		$db = new Database();

		$conn = $db->getConn();

		$conn->autocommit(false);

		$conn->begin_transaction();

		$service = new OrderDataService($conn);

		$o = new Order(0, $userID, $ccID, $addrID);


		//expecting an id of insert statement
		$orderID = $service->createOrder($o);

		// while
		// echo "starting the loop<br>";

		// print_r($c->getItems());

		$numberoffailures = 0;
		foreach ($c->getItems() as $prodID => $qty) {
			// echo "inside the loop<br>";
			// echo "prodid = " . $prodID."<br>";
			// echo "qty =" . $qty . "<br>";

			$oD = new OrderDetails(0, $orderID, $prodID, $qty);
			$value = $service->createOrderDetailsRow($oD);
			if ($value == 0) {
				$numberoffailures++;
			}

		}
		//$value = $service->createOrderDetailsRow($c, $result);

		if ($orderID > 0 && $numberoffailures == 0) {
			$conn->commit();
			$final = true;
		}
		else
		{
			$conn->rollback();
			$final = false;
		}

		$conn->close();

		return $final;
	}

	public function getOrderData()
	{
		$db = new Database();

		$conn = $db->getConn();

		$service = new OrderDataService($conn);

		$result = $service->readOrdersData();

		return $result;
	}



}