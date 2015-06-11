<?php

namespace Admin\Controllers;

class ControllerBase extends \Slimore\Mvc\Controller
{
	public $moduleName = 'admin';

	public function __construct() 
	{
		parent::__construct();

		// your construction
	}
}