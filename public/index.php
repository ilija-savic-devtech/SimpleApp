<?php
require 'autoloader.php';
echo "Hello World<br>";
$route = new routes\Route(new \routes\RouteLogic());
$route->add("/");
$route->add("/student");
$route->add("/professor");
$uriParam = $_SERVER['REQUEST_URI'];
$route->add($uriParam);

$route->submit();
?>