<?php

namespace classes;
class Student extends AbstractHuman implements StudentInterface, HumanInterface
{

    private $_indexNo;
    private $_average;

    /**
     * @return mixed
     */
    public function getIndexNo()
    {
        return $this->_indexNo;
    }

    /**
     * @param mixed $indexNo
     */
    public function setIndexNo($indexNo)
    {
        $this->_indexNo = $indexNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAverage()
    {
        return $this->_average;
    }

    /**
     * @param mixed $average
     */
    public function setAverage($average)
    {
        $this->_average = $average;
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

    public function studying()
    {
        echo "Student is studying!!!";
    }

    public function role()
    {
        echo "<h1><center>I am STUDENT!!!</center></h1><br>";
    }

    public function printNameAndSurname(){
        echo "Name: " . $this->getName() . "<br>Surname: " . $this->getSurname() . "<br>";
    }

    public function indexAndAverage(){
        echo "Index number: " . $this->getIndexNo() . "<br> Average: " . $this->getAverage() . "<br>";
    }

}

?>