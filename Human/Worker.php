<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 03.10.2018
 * Time: 0:49
 */

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

    /**
     * @param string $date
     * @param int $paid_sum
     */
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
