<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 03.10.2018
 * Time: 0:49
 */


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

    /**
     * @param Worker $worker
     */
    public function delSubordination(Worker $worker)
    {
        unset($this->listWorker[$worker->getFio()]);
    }

}