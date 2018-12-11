<?php

class DTO implements \JsonSerializable
{
	private $code;
	private $object;

	public function __construct($code, $object)
	{
		$this->code = $code;
		$this->object = $object;
	}

	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
}

?>