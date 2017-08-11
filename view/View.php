<?php

namespace view;

use classes\Professor;
use classes\Student;

class View
{

    public function student()
    {
        $student = new Student();
        $student->role();
        $student->setName("Petar")->setSurname("Petrovic");
        echo "Student name: " . $student->getName() . "<br>";
        echo "Student surname: " . $student->getSurname() . "<br>";
        $student->studying();
    }

    public function professor()
    {
        $professor = new Professor();
        $professor->role();
        $professor->setName("Marko")->setSurname("Markovic");
        echo "Student name: " . $professor->getName() . "<br>";
        echo "Student surname: " . $professor->getSurname() . "<br>";
        $professor->questioning();
    }

    public function home()
    {
        echo "<h1><center>This is Home Page</center></h1>";
    }
}