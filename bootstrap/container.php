<?php 
	
require __DIR__ . "/../vendor/autoload.php";

$containerBuilder = new \DI\ContainerBuilder;

$containerBuilder->useAutowiring( false ); /* False para aprender PHP DI (true para carga automatica) */
$containerBuilder->addDefinitions( __DIR__ . '/../bootstrap/config.php'); /* Configuracion del contenedor */

try {
	$container = $containerBuilder->build();
	return $container;
} catch (Exception $e) {
}

