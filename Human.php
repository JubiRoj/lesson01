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

Class Worker extends Human
{
    //Класс "Сотрудник". Размер оклада. Сотрудник может получать зарплату (конкретного числа, конкретную сумму
    // - если сумма не указана, то согласно размеру оклада). Можно получить список всех выданных зарплат с датами.
    // В качестве даты для простоты выступает просто строка.
    private $salary = 0;
    private $currency = "rub.";
    private $listPaid = array();

    /**
     * @param int $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function makePaid($date, $paid_sum) //произвести выплату заработной платы
    {   $sum = $this->salary;
        if($paid_sum) $sum = $paid_sum;
        $this->listPaid[]=$date." ".$sum." ".$this->currency;
    }

    /**
     * @return string
     */
    public function getListPaid()
    {
            return implode($this->listPaid, " \n");
    }

}

Class Manager extends Worker
{
    //Класс "Менеджер"*. Имеет список сотруников в подчинении. Сотрудников можно добавлять, а также удалять сотрудников,
    // указав фамилию сотрудника, которого решили убрать. Можно получить список сотрудников, которые есть в подчинении.
    private $listWorker= array();

    /**
     * @param Worker $worker
     */
    public function addSubordination(Worker $worker)
    {
        $this->listWorker[$worker->getFio()] = $worker->getFio();
    }

    /**
     * @return string
     */
    public function getListWorker()
    {
        return "List worker:\n".implode($this->listWorker, " \n");
    }

    public function delSubordination(Worker $worker)
    {
        unset($this->listWorker[$worker->getFio()]);
    }

}