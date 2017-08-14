<?php
require '..\\autoloader.php';
use classes\Professor;
use classes\Student;

$route = new \routes\Router();

$route->add('/', function() {
    echo "<h1><center>This is Home Page</center></h1>";
});
$route->add('/student', function() {
    $student = new Student();
    $student->role();
    $student->setName("Petar")->setSurname("Petrovic")->setIndexNo("48265")->setAverage(8.88);
    $student->printNameAndSurname();
    $student->indexAndAverage();
    $student->studying();
});
$route->add('/professor', function() {
    $professor = new Professor();
    $professor->role();
    $professor->setName("Marko")->setSurname("Markovic")->setNumberOfScientificWork(4)->setSubject("Data science");
    $professor->printNameAndSurname();
    $professor->noOfScientificWorkAndSubject();
    $professor->questioning();
});
$route->add('/student/{id}', function($id){
    if (is_numeric($id)) {
        echo "<h1><center>Student id: $id</center></h1>";
    }
    else {
        echo "<h1><center>Invalid page!!!</center></h1>";
    }
});

$route->listen();

