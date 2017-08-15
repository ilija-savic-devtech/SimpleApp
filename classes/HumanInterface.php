<?php
namespace classes;
/**
 * Interface HumanInterface
 * @package classes
 */
interface HumanInterface{
    /**
     * Displaying a role
     * @return mixed
     */
    public function role();

    /**
     * Displaying name and surname
     * @return mixed
     */
    public function printNameAndSurname();
}
