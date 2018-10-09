<?php 


return \FastRoute\simpleDispatcher(function ( \FastRoute\RouteCollector $route )
{
	$route->addRoute('GET', '/', ['\App\Controllers\HomeController', 'index']);
});