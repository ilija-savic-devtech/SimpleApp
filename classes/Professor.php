<?php

namespace classes;
class Professor extends AbstractTest implements ProffesorInterface
{
    private $_name;
    private $_surname;

    public function questioning()
    {
        echo "Proffessor questioning!!!";
    }

    public function role()
    {
        echo "<h1><center>I am PROFESSOR!!!</center></h1><br>";
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


}

?>