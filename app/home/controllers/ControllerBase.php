<?php

namespace Home\Controllers;

class ControllerBase extends \Slimore\Mvc\Controller
{
	public $moduleName = 'home';

	public function __construct() 
	{
		parent::__construct();

		// your construction
	}
}