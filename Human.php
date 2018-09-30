<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 30.09.2018
 * Time: 8:05
 * Description: Класс "Человек". (поля - фио, возраст)
 */

class Human
{
    private $fio;
    private $age;

    public function __construct($fio, $age)
    {
        $this->fio = $fio;
        $this->age=$age;
    }

    /**
     * @param mixed $fio
     */
    public function setFio($fio)
    {
        $this->fio = $fio;
    }

    /**
     * @return mixed
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->fio . ", ".$this->age . " years old.";
    }


}