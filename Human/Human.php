<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 03.10.2018
 * Time: 0:47
 */
include 'Student.php';
include 'Worker.php';
include 'Manager.php';

class Human  //* Description: Класс "Человек". (поля - фио, возраст)
{
    private $fio;
    private $age;
    public static $count = 0;
    public static $class_count = array();

    /**
     * Human constructor.
     * @param string $fio
     * @param int $age
     */
    public function __construct($fio, $age)
    {
        $this->fio = $fio;
        $this->age=$age;
        self::$count++;
        self::$class_count[static::class] = self::$class_count[static::class]+1;
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

    /**
     * @return string
     */
    public static function getClassCount()
    {
        // self::$class_count[static::class] = self::$class_count[static::class]+1;
        return static::class .": ". self::$count . "/" . self::$class_count[static::class];
    }


}
