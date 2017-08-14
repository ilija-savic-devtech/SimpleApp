<?php

namespace classes;
/**
 * Class AbstractHuman
 * @package classes
 */
abstract class AbstractHuman
{
    /**
     * Name variable for children classes
     * @var name
     */
    protected $name;
    /**
     * Surname variable for children classes
     * @var surname
     */
    protected $surname;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return AbstractHuman
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     * @return AbstractHuman
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }



}
