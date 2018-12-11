<?php 

/**
 * 
 */
class CreditCard implements \JsonSerializable
{
	private $id;
	private $ccNum;
	private $csv;
	private $exM;
	private $exY;
	private $user;

    


	/**
	 * Class Constructor
	 * @param    $id   
	 * @param    $ccNum   
	 * @param    $csv   
	 * @param    $exM   
	 * @param    $exY   
	 * @param    $user   
	 */
	public function __construct($id, $ccNum, $csv, $exM, $exY, $user)
	{
		$this->id = $id;
		$this->ccNum = $ccNum;
		$this->csv = $csv;
		$this->exM = $exM;
		$this->exY = $exY;
		$this->user = $user;
	}

    public function jsonSerialize()
    {
        return get_object_vars($this);
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
    public function getCcNum()
    {
        return $this->ccNum;
    }

    /**
     * @param mixed $ccNum
     *
     * @return self
     */
    public function setCcNum($ccNum)
    {
        $this->ccNum = $ccNum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCsv()
    {
        return $this->csv;
    }

    /**
     * @param mixed $csv
     *
     * @return self
     */
    public function setCsv($csv)
    {
        $this->csv = $csv;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExM()
    {
        return $this->exM;
    }

    /**
     * @param mixed $exM
     *
     * @return self
     */
    public function setExM($exM)
    {
        $this->exM = $exM;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExY()
    {
        return $this->exY;
    }

    /**
     * @param mixed $exY
     *
     * @return self
     */
    public function setExY($exY)
    {
        $this->exY = $exY;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}

 ?>