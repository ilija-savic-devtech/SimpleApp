<?php

namespace classes;
class Professor extends AbstractHuman implements ProfessorInterface, HumanInterface
{
    private $_numberOfScientificWork;
    private $_subject;

    /**
     * @return mixed
     */
    public function getNumberOfScientificWork()
    {
        return $this->_numberOfScientificWork;
    }

    /**
     * @param mixed $numberOfScientificWork
     * @return Professor
     */
    public function setNumberOfScientificWork($numberOfScientificWork)
    {
        $this->_numberOfScientificWork = $numberOfScientificWork;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->_subject;
    }

    /**
     * @param mixed $subject
     * @return Professor
     */
    public function setSubject($subject)
    {
        $this->_subject = $subject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->_surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->_surname = $surname;
        return $this;
    }

    public function questioning()
    {
        echo "Professor questioning!!!";
    }

    public function role()
    {
        echo "<h1><center>I am PROFESSOR!!!</center></h1><br>";
    }

    public function printNameAndSurname(){
        echo "Name: " . $this->getName() . "<br>Surname: " . $this->getSurname() . "<br>";
    }

    public function noOfScientificWorkAndSubject(){
        echo "Number of scientific work: " . $this->getNumberOfScientificWork() . "<br>Subject: " . $this->getSubject() . "<br>";
    }


}

?>