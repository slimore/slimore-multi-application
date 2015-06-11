<?php

$app->get("/", function() {
	echo "Hello world!";
});

$app->map('/foo/bar', function() {
    echo "I respond to multiple HTTP methods!";
})->via('GET', 'POST');

// Routes

//$app->get('/news', 'NewsController:read');
// or $app->get('/news', controller('index', 'read'));

//$app->get('/news', 'Home\Controllers\NewsController:read');
// or $app->get('/news', controller('news', 'read', 'Home\Controllers\\'));

//$app->post('/news', 'Home\Controllers\NewsController:create');
//$app->put('/news/:id', 'Home\Controllers\NewsController:update');
//$app->delete('/news/:id', 'Home\Controllers\NewsController:delete');

// or

// Module Namespace group
$app->moduleNamespace('Home\Controllers\\', function($namespace, $app) {
    //$ctl = 'IndexController';
    //$app->get('/', $namespace . $ctl . ':index');
    //$app->get('/news/:id', $namespace . $ctl . ':index');

    $app->controller('index', function($controller, $app, $namespace) {

        $app->get('/index', $namespace . $controller . ':index');
        $app->get('/test', $namespace . $controller . ':test');

    }, $namespace);

	// cotnroller group
	$app->controller('news', function($controller, $app, $namespace) { 

		$ctl = $namespace . $controller;

		$app->get('/news',        $ctl . ':read');
		$app->get('/news/:id',    $ctl . ':readOne');
		$app->post('/news',       $ctl . ':create');
		$app->put('/news/:id',    $ctl . ':update');
		$app->delete('/news/:id', $ctl . ':delete');

	}, $namespace);
});

// Auto routes => /:action, /:controller/:action, /:module/:controller/:action
$app->autoRoute();