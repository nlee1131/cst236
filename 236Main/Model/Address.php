<?php


class Address implements \JsonSerializable
{
    private $id;
    private $userID;
    private $addr1;
    private $addr2;
    private $city;
    private $state;
    private $postalCode;
    private $billing;

    
    
    public function __construct($id, $userID, $addr1, $addr2, $city, $state, $postalCode, $billing)
    {
        $this->id = $id;
        $this->userID = $userID;
        $this->addr1 = $addr1;
        $this->addr2 = $addr2;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
        $this->billing = $billing;
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
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @return mixed
     */
    public function getAddr1()
    {
        return $this->addr1;
    }

    /**
     * @return mixed
     */
    public function getAddr2()
    {
        return $this->addr2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @param mixed $addr1
     */
    public function setAddr1($addr1)
    {
        $this->addr1 = $addr1;
    }

    /**
     * @param mixed $addr2
     */
    public function setAddr2($addr2)
    {
        $this->addr2 = $addr2;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function setBilling($billing)
    {
        $this->billing = $billing;
    }

    
}

