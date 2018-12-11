<?php
require_once '../Autoloader.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/**
 * 
 */
class OrderDataService 
{

	private $conn;


	/**
	 * Class Constructor
	 * @param    $conn   
	 */
	public function __construct($conn)
	{
		$this->conn = $conn;
	}


	
	public function createOrder(Order $o)
	{
		//$db = new Database();

		$sql_query = "INSERT INTO ORDERS (USER_ID, CREDIT_CARD_ID, ADDRESS_ID) VALUES (?, ?, ?)";

		$stmt = $this->conn->prepare($sql_query);

		if(!$stmt)
        {
            exit("Error preparing: " . mysqli_error($db->getConn()));
        }

        $u = $o->getUser();
        $c = $o->getCc();
        $a = $o->getAddr();

        $stmt->bind_param("iii", $u, $c, $a);

        $stmt->execute();


        $result = $stmt->insert_id;

        return $result;
	}


	public function createOrderDetailsRow(OrderDetails $orderDetails)
	{

		// loop through the cart items.
		$sql_query = "INSERT INTO ORDER_DETAILS (ORDERS_KEY, PRODUCT_KEY, QUANTITY) VALUES (?,?,?)";

		$stmt = $this->conn->prepare($sql_query);

		if(!$stmt)
        {
            exit("Error preparing: " . mysqli_error($db->getConn()));
        }

        
        $oN = $orderDetails->getOrder();
        $prod = $orderDetails->getProduct();
        $q = $orderDetails->getQuantity();

        $stmt->bind_param("iii", $oN, $prod, $q);

        $stmt->execute();


		$result = $stmt->affected_rows;

		return $result;

		// add a new row to the order details table.  

	}

	public function readOrdersData()
	{
		$sql_query = "SELECT USER.FIRSTNAME, ADDRESS.ADDR1, ORDERS.ID AS 'ORDERID', ORDER_DETAILS.QUANTITY, ORDERS.DATE, PRODUCT.NAME AS 'PRODUCTNAME', PRODUCT.ID AS 'PROD ID' FROM ORDER_DETAILS JOIN ORDERS ON ORDERS.ID = ORDER_DETAILS.ORDERS_KEY JOIN USER ON ORDERS.USER_ID = USER.ID JOIN ADDRESS on ORDERS.ADDRESS_ID = ADDRESS.ID JOIN PRODUCT ON PRODUCT.ID = ORDER_DETAILS.PRODUCT_KEY ORDER BY quantity DESC";

		$stmt = $this->conn->prepare($sql_query);

		if(!$stmt)
        {
            exit("Error preparing: " . mysqli_error($db->getConn()));
        }

        $stmt->execute();

        $stmt->store_result();

        $orderInfo = [];

        $stmt->bind_result($firstName, $addr, $orderID, $quantity, $date, $prodName, $prodID);

        $i = 0;

        while ($stmt->fetch()) {
        	$o = new OrderInfo($firstName, $addr, $orderID, $quantity, $date, $prodName, $prodID);
        	$orderInfo[$i] = $o;
        	$i++;
        }

        return $orderInfo;
	}

}









