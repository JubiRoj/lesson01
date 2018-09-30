<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 30.09.2018
 * Time: 7:14
 */

class Student00
{
    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;

    public static $val = 0;
    public static $count = 0;

    private $lastName;
    private $firstName;
    private $type = self::TYPE_OCHN;

    private $attributes = [];

    public static function createOchn($lastName, $firstName)
    {
        return new self($lastName, $firstName, self::TYPE_OCHN);
    }

    public static function createZaOchn($lastName, $firstName)
    {
        return new self($lastName, $firstName, self::TYPE_ZAOCHN);
    }

    public static function typesList()
    {
        return [
            self::TYPE_OCHN => 'Очный',
            self::TYPE_ZAOCHN => 'Заочный',
        ];
    }

    public function __construct($lastName, $firstName, $type)
    {
        self::$count++;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->type = $type;
    }

    public function __call($name, $args)
    {
        echo 'Call ' . $name . PHP_EOL;
        print_r($args);
    }

    public function __invoke()
    {
        echo 'Invoke' . PHP_EOL;
    }

    public function __get($name)
    {
        echo 'get' . PHP_EOL;
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }

    public function __set($name, $value)
    {
        echo 'set' . PHP_EOL;
        $this->attributes[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function rename($lastName, $firstName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getFullName()
    {
        return $this->lastName . ' ' . $this->firstName;
    }
}

// ==============================

$student0 = new Student00('Sidorov', 'Petya', Student00::TYPE_ZAOCHN);

$student1 = Student00::createOchn('Sidorov', 'Petya');
$student2 = Student00::createZaOchn('Sidorov', 'Petya');


echo $student0->getFullName() . PHP_EOL;
echo $student0 . PHP_EOL;
echo Student00::$count . PHP_EOL;

$student1 = new Student00('Sidorov', 'Petya', "Заочно");

// ===============================


