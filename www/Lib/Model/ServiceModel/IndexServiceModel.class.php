<?php

class IndexServiceModel
{
	public function getIndexInfo()
	{
		$menuUtility = FactoryModel::utility('Menu');
		$data = $menuUtility->getMenuList();
		return $data;
	}
}
