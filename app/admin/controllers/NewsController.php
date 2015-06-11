<?php

namespace Admin\Controllers;

class NewsController extends ControllerBase
{
	public function index($name = "")
		{
		echo "Admin\Controllers\NewsController->indexAction " . $name;
	}

	public function test() 
	{
		echo "Admin\Controllers\NewsController->testAction";
	}
}