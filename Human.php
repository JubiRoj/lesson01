<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 30.09.2018
 * Time: 8:05
 */

class Human  //* Description: Класс "Человек". (поля - фио, возраст)
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

Class Student extends Human{
    //Класс "Студент". Форма обучения, курс. Студент может получать оценки (тройки, пятерки и т.д.).
    //Должен быть метод, который нам отдаст все оценки, которые получал студент.
    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;
    private $type = self::TYPE_OCHN;
    private $course;
    private $list_numbers = "Current list numbers: ";

    /**
     * @param mixed $course
     */
    public function EnrollInCourse($course, $type)
    {
        $this->course = $course;
        $this->type = $type;
    }

    /**
     * @param $number
     */
    public function addNumber($number)
    {
        //$number validator, больше 1 но меньше 5,
        $this->list_numbers = $this->list_numbers .$number .", ";
    }
    public function getListNumber()
    {
        return $this->list_numbers;
    }

    public function __toString()
    {
        $type_str = $this->type==1?"full-time":"correspondence";
        return parent::__toString()." ".$this->course." year student, ". $type_str ." courses."; // 1st year student, full-time and correspondence courses.
    }


}