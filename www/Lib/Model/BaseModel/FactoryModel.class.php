<?php

class FactoryModel
{
	public static function service($name)
	{
		return self::Factory($name, __FUNCTION__);
	}

	public static function dao($name)
	{
		return self::Factory($name, __FUNCTION__);
	}

	public static function utility($name)
	{
		return self::Factory($name, __FUNCTION__);
	}

	private static function factory($name, $type)
	{
		static $_model = array();
		$type = ucfirst($type);	
		$name = C('DEFAULT_APP') . '/Model/' . $type . 'Model/' . $name . $type . 'Model';
		if(isset($_model[$name]))
		{
			return $_model[$name];
		}
		import($name);
		$class = basename($name);
		if(class_exists($class))
		{
			$model = new $class();
			$_model[$name] = $model;
			return $model;
		}
		else
		{
			throwException('不存在的' . $type . '模型：' . $class);
		}
	}	
}
