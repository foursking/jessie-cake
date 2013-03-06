<?php

class DaoModel
{
	private static $handle = null;

	public function __construct()
	{
		$class = substr(get_class($this), 0, -8);
		self::$handle = new Model($class);
	}

	public function getTableName()
	{
		return self::$handle->getTableName();
	}
	
	public function query($str)
	{
		return self::$handle->query($str);
	}
}
