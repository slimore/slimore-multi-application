<?php

namespace Api\Controllers;

class ControllerBase extends \Slimore\Mvc\Controller
{
	public $moduleName = 'api';

	public function __construct() 
	{
		parent::__construct();

		// your construction
	}
}