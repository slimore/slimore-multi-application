<?php

namespace Admin\Controllers;

class IndexController extends ControllerBase
{
	public function index()
	{
		echo "Admin\Controllers\IndexController->indexAction";

		// views/index.php
		$this->render('index', [

		]);
	}
}