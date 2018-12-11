<?php

/**
 * 
 */
class OrderInfo implements JsonSerializable
{
	
	private $firstName;
	private $addr;
	private $orderID;
	private $quantity;
	private $date;
	private $prodName;
	private $prodID;


	/**
	 * Class Constructor
	 * @param    $firstName   
	 * @param    $addr   
	 * @param    $orderID   
	 * @param    $quantity   
	 * @param    $date   
	 * @param    $prodName   
	 * @param    $prodID   
	 */
	public function __construct($firstName, $addr, $orderID, $quantity, $date, $prodName, $prodID)
	{
		$this->firstName = $firstName;
		$this->addr = $addr;
		$this->orderID = $orderID;
		$this->quantity = $quantity;
		$this->date = $date;
		$this->prodName = $prodName;
		$this->prodID = $prodID;
	}

	public function jsonSerialize()
    {
        return get_object_vars($this);
    }
	
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * @param mixed $addr
     *
     * @return self
     */
    public function setAddr($addr)
    {
        $this->addr = $addr;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param mixed $orderID
     *
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * @param mixed $prodName
     *
     * @return self
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProdID()
    {
        return $this->prodID;
    }

    /**
     * @param mixed $prodID
     *
     * @return self
     */
    public function setProdID($prodID)
    {
        $this->prodID = $prodID;

        return $this;
    }
}




?>