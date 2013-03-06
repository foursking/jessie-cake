<?php

class MenuUtilityModel
{

	/**
		* @function  getMenuById 
		*
		* 按照id获取菜单信息，支持批量获取，批量获取顺序符合传入数组顺序
		*
		* @param $id 菜单id
		*
		* @returns   
	 */
	public function getMenuById($id)
	{
		if(empty($ids))
		{
			return false;
		}
		$menuDao = FactoryModel::dao('Menu');
		$data = array();
		if(is_scalar($id))
		{
			$memKey = implode('|', array(__CLASS__, __FUNCTION__, $id));
			$item = MemcacheModel::get($memKey);
			if($item)
			{
				$data = $item;
			}
			else
			{
				$data = $menuDao->getById($id);
				MemcacheModel::set($memKey, $data, 1800);
			}
		}
		elseif(is_array($id))
		{
			$data = array_flip($id);
			foreach($id as $singleid)
			{
				$memKey = implode('|', array(__CLASS__, __FUNCTION__, $singleid));
				$item = MemcacheModel::get($memKey);
				if($item)
				{
					$data[$singleid] = $item;
				}
				else
				{
					$data[$singleid] = array();
					$nid[] = $singleid;
				}
			}
			if(!empty($nid))
			{
				if($temp = $menuDao->getById($nid))
				{
					foreach($temp as $t)
					{
						$data[$t['id']] = $t;
						$memKey = implode('|', array(__CLASS__, __FUNCTION__, $t['id']));
						MemcacheModel::set($memKey, $t, 1800);
					}
				}
			}
		}
		return $data;
	}
	
	
	/**
		* @function  getMenuList 
		* 
		* 获取菜单列表
		* 
		* @param $page	页码
		* @param $size	每页显示数量
		* @param $order	排序字段
		* @param $args	附加参数
		*
		* @returns   
	 */
	public function getMenuList($page, $size, $order, $args = array())
	{
		$whereStr = '';
		if(!empty($args) && is_array($args))
		{
			foreach($args as $key=>$value)
			{
				$arr[] = $key . " = '" .$value . "'";
			}
			$whereStr = ' where ' . implode(' and ', $arr);
		}
		$memKey = implode('|', array(__CLASS__, __FUNCTION__, $page, $size, $whereStr));
		$data = MemcacheModel::get($memKey);
		if(!$data)
		{
			$menuDao = FactoryModel::dao('Menu');
			$fields = 'id, name, description';
			$orderStr = $order ? ' order by ' . $order : '';
			$sql = 'select ' . $fields . ' from ' . $menuDao->getTableName() . $whereStr . $orderStr;
			$data = $menuDao->query($sql);
			MemcacheModel::set($memKey, $data, 1800);
		}
		return $data;
	}
}
