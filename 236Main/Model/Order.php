<?php 

/**
 * 
 */
class Order
{
	private $id;
	private $user;
	private $cc;
	private $addr;


    /**
     * Class Constructor
     * @param    $id   
     * @param    $user   
     * @param    $cc   
     * @param    $addr   
     */
    public function __construct($id, $user, $cc, $addr)
    {
        $this->id = $id;
        $this->user = $user;
        $this->cc = $cc;
        $this->addr = $addr;
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

    /**
     * @return mixed
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param mixed $cc
     *
     * @return self
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

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
}

?>