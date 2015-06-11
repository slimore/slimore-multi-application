<?php

namespace Home\Controllers;

class IndexController extends ControllerBase
{
	public function index()
	{
		echo "Home\Controllers\IndexController->indexAction";

		// views/index.php
		$this->render('index', [

		]);
	}
}