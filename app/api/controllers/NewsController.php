<?php

namespace Api\Controllers;

class NewsController extends ControllerBase
{
	public function index($name = "")
	{
		echo "Api\Controllers\NewsController->indexAction " . $name;
	}

	public function test() 
	{
		echo "Api\Controllers\NewsController->testAction";
	}
}