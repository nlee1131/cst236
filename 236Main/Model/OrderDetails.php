<?php

/**
 * 
 */
class OrderDetails
{
	
	private $id;
	private $order;
	private $product;
	private $quantity;


	/**
	 * Class Constructor
	 * @param    $id   
	 * @param    $order   
	 * @param    $product   
	 * @param    $quantity   
	 */
	public function __construct($id, $order, $product, $quantity)
	{
		$this->id = $id;
		$this->order = $order;
		$this->product = $product;
		$this->quantity = $quantity;
	}

	

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->product = $product;

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
}

?>