<?php  
require 'system/config.php';
var_dump(URI);
require 'system/core/Router.php';

$router = new Router();

echo ' <pre>';
print_r($router->getUri());
echo ' </pre>';

$controlador = $router->getController();
$metod = $router->getMethod();
$param = $router->getParam();

echo "Controlador:{$controlador} </br>";
echo "Metodo: {$metod} </br>";
echo "Param:{$param}";



?>