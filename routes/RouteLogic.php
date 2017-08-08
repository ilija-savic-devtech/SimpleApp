<?php
    namespace routes;
    use classes\Professor;
    use classes\Student;

    class RouteLogic{
        public function showDetails($uriParam, $uri = array()){
            if($uriParam == $uri[0]){
                echo "<h1><center>This is Home Page</center></h1>";
            } elseif($uriParam == $uri[1]) {
                $student = new Student();
                $student->role();
                $student->setName("Petar");
                $student->setSurname("Petrovic");
                echo "Student name: " . $student->getName(). "<br>";
                echo "Student surname: " . $student->getSurname() . "<br>";
                $student->studying();
            } elseif ($uriParam == $uri[2]){
                $professor = new Professor();
                $professor->role();
                $professor->setName("Marko");
                $professor->setSurname("Markovic");
                echo "Student name: " . $professor->getName(). "<br>";
                echo "Student surname: " . $professor->getSurname() . "<br>";
                $professor->questioning();
            } else {
                echo "<h1><center>Invalid page!!!</center></h1>";
            }
        }
    }

?>