<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 03.10.2018
 * Time: 0:43
 */

Class Student extends Human
{
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
        //$number validator, нужно сделать больше 1 но меньше 5,
        $this->list_numbers = $this->list_numbers .$number .", ";
    }

    /**
     * @return string
     */
    public function getListNumber()
    {
        return $this->list_numbers;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $type_str = $this->type==1?"full-time":"correspondence";
        return parent::__toString()." ".$this->course." year student, ". $type_str ." courses."; // 1st year student, full-time and correspondence courses.
    }

}
