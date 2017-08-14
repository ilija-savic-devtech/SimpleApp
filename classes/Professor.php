<?php

namespace classes;
/**
 * Class Professor
 * @package classes
 */
class Professor extends AbstractHuman implements ProfessorInterface, HumanInterface
{
    /**
     * @var
     */
    private $_numberOfScientificWork;
    /**
     * @var
     */
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
     * Printing out Professor action
     */
    public function questioning()
    {
        echo "Professor questioning!!!";
    }

    /**
     * Printing out role of Professor class
     */
    public function role()
    {
        echo "<h1><center>I am PROFESSOR!!!</center></h1><br>";
    }

    /**
     * Printing out name and surname parameters of Professor class
     */
    public function printNameAndSurname(){
        echo "Name: " . $this->getName() . "<br>Surname: " . $this->getSurname() . "<br>";
    }

    /**
     * Printing out number of scientific work and subject of Professor class
     */
    public function noOfScientificWorkAndSubject(){
        echo "Number of scientific work: " . $this->getNumberOfScientificWork() . "<br>Subject: " . $this->getSubject() . "<br>";
    }


}

