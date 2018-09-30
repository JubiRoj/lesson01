<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 29.09.2018
 * Time: 22:50
 */

class Student01 {

    public $firstName;
    private $lastName;

    public function __construct()
    {
        echo 123 . PHP_EOL;
    }

    public function setLasttName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function __toString()
    {
        return  '!' . $this->firstName .  ' ' . $this->getLastName();
    }
}

class GoodStudent01 extends Student01 {
    public $stipendia = 0;

    public function getFullName()
    {
        return $this->firstName .  ' ' . $this->getLastName();
    }
}

//$objStudent = new GoodStudent01();
//$objStudent->setFirstName('Vasya');
//$objStudent->setLasttName( 'Petrov');
//
//var_dump($objStudent);
//
//echo $objStudent->getFullName() . PHP_EOL;
//echo $objStudent . PHP_EOL;