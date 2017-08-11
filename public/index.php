<?php
require 'autoloader.php';

$route = new \routes\Router();

$route->add('/', function() {
    $view = new \view\View();
    $view->home();
});
$route->add('/student', function() {
    $view = new \view\View();
    $view->student();
});
$route->add('/professor', function() {
    $view = new \view\View();
    $view->professor();
});
$route->add('/student/.+', function($id){
    if (is_numeric($id)) {
        echo "<h1><center>Student id: $id</center></h1>";
    }
    else {
        echo "<h1><center>Invalid page!!!</center></h1>";
    }
});


$route->listen();

