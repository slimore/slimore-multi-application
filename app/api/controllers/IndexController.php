<?php

namespace Api\Controllers;

class IndexController extends ControllerBase
{
	public function index()
	{
		echo "Api\Controllers\IndexController->indexAction";

		// views/index.php
		$this->render('index', [

		]);
	}
}