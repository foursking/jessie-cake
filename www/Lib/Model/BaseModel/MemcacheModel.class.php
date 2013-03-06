<?php

class MemcacheModel
{
	public static function set($name, $value, $time)
	{
		return Cache::getInstance('Memcache')->set($name, $value, $time);
	}

	public static function get($name)
	{
		return Cache::getInstance('Memcache')->get($name);
	}

	public static function rm($name, $ttl = false)
	{
		return Cache::getInstance('Memcache')->rm($name, $ttl);
	}

	public static function clear()
	{
		return Cache::getInstance('Memcache')->clear();
	}
}
