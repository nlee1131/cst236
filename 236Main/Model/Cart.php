<?php 

/**
 * 
 */
class Cart
{
	
	private $userId;
	private $items = array();
	private $subtotals = array();
	private $totalPrice;

	public function __construct($userId)
	{
		$this->userId = $userId;
		$this->items = array();
		$this->subtotals = array();
		$this->totalPrice = 0;
	}


	public function addItem($prodId)
	{
		if (array_key_exists($prodId, $this->items)) {
			$this->items[$prodId] += 1;
		}
		else
		{
			$this->items = $this->items + array($prodId => 1);
		}
	}

	public function updateQuantity($prodId, $newqty)
	{
		if (array_key_exists($prodId, $this->items)) {
			$this->items[$prodId] = $newqty;
		}
		else
		{
			$this->items = $this->items + array($prodId => $newqty);
		}
		if($this->items[$prodId] == 0)
		{
			unset($this->items[$prodId]);
		}
	}

	public function calcTotal()
	{
		$service = new ProductBusinessService();

		$subtotals_array = array();

		$this->totalPrice = 0;

		foreach ($this->items as $item => $qty) {
			$product = $service->findById($item);
			$product_subtotal = $product->getPrice() * $qty;
			$subtotals_array = $subtotals_array + array($item => $product_subtotal);
			$this->totalPrice = $this->totalPrice + $product_subtotal;
		}

        $this->subtotals = $subtotals_array;
	}

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtotals()
    {
        return $this->subtotals;
    }

    /**
     * @param mixed $subtotals
     *
     * @return self
     */
    public function setSubtotals($subtotals)
    {
        $this->subtotals = $subtotals;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     *
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
}



?>