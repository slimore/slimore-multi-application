<?php

namespace Home\Controllers;

class NewsController extends ControllerBase
{
	public function index($name = "")
	{
		echo "Home\Controllers\NewsController->indexAction " . $name;
	}

	public function test() 
	{
		echo "NewsController->testAction";
	}

	public function read() 
	{
		echo "NewsController->readAction";
	}

	public function readOne($id = "") 
	{
		echo "NewsController->readOneAction " . $id;
	}


	public function create() 
	{
		echo "NewsController->createAction";
	}

	public function update($id = "") 
	{
		echo "NewsController->updateAction " . $id;
	}

	public function delete($id = "") 
	{
		echo "NewsController->deleteAction " . $id;
	}
}