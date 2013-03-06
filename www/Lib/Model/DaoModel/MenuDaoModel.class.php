<?php

class MenuDaoModel extends DaoModel
{
	protected $tableName = 'menu';

	protected $fields = array(
		0 => 'id',
		1 => 'name',
		2 => 'description',
		'_pk' => 'id',
		'_autoinc' => true
	);

	public function getById($id)
	{
		if(is_scalar($id))
		{
			return $this->query("select * from " . $this->getTableName() . " where id='" . $id . "'");
		}
		$idstr = implode("','", $id);
		return $this->query("select * from " . $this->getTableName() . " where id in ('" . $idstr . "')");
	}
}
