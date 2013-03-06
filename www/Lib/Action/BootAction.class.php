<?php

class BootAction extends BaseAction
{
	public function index()
	{
		//$indexService = FactoryModel::service('Index');
		//$indexService->getIndexInfo();
		$this->display();
	}
}
