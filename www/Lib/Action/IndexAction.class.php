<?php

class IndexAction extends BaseAction
{
	public function index()
	{
		echo 'this is ok';
		//$indexService = FactoryModel::service('Index');
		//$indexService->getIndexInfo();
		$this->display();
	}
}
