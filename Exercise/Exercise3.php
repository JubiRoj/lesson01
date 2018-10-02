<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 29.09.2018
 * Time: 22:37
 */
//
//3.1. Организовать структуру классов.
//Класс "Человек". (поля - фио, возраст)

//Класс "Студент". Форма обучения, курс. Студент может получать оценки (тройки, пятерки и т.д.).
//Должен быть метод, который нам отдаст все оценки, которые получал студент.

//Класс "Сотрудник". Размер оклада. Сотрудник может получать зарплату (конкретного числа, конкретную сумму
// - если сумма не указана, то согласно размеру оклада). Можно получить список всех выданных зарплат с датами.
// В качестве даты для простоты выступает просто строка.

//Класс "Менеджер"*. Имеет список сотруников в подчинении. Сотрудников можно добавлять, а также удалять сотрудников,
// указав фамилию сотрудника, которого решили убрать. Можно получить список сотрудников, которые есть в подчинении.

//* это необязательная, но настоятельно рекомендуемая часть задания, для тех, кто хочет хорошо развиваться.
//Помимо организации самих классов, подготовить тестовое наполнение. Создать несколько человек, студентов, сотрудников, менеджеров.
// Повызывать, написанные вами методы для соответсвующих объектов.
//Дописать функционал, который обеспечит вам подсчет количества объектов каждого класса. Вывести эти количества в консоль.
// Для тех, кто любит поинтереснее - в консоль вывести по каждому классу 2 числа (с учетом потомков и без учета потомков).
// Например, у нас 2 просто сотрудника и 3 менеджера. Для класса "Сотрудники" мы должны вывести "Сотрудники: 5/2"
//Подсчет количества объхектов каждого типа.
//Примечание: вызов родительского метода и/или конструктора можно осуществялть через оператор parent::
//
include 'Human.php';

echo "\n\n===Test Human===========\n";
$objHuman = new Human("Denis Jernov", 32);
var_dump($objHuman);
echo $objHuman->getFio() . PHP_EOL;
$objHuman->setFio("Anatoliy Jernov");
echo $objHuman->getFio() . PHP_EOL;
echo $objHuman . PHP_EOL;

echo "\n\n===Test Student=========\n";
$student = new Student("Ivan Petrov", 18);
$student->EnrollInCourse("1", Student::TYPE_OCHN);
$student->addNumber(5);
$student->addNumber(3);
$student->addNumber(4);
$student->addNumber(5);
var_dump($student);
echo $student . PHP_EOL;
echo $student->getListNumber() . PHP_EOL;

echo "\n\n===Test Worker===========\n";
$worker = new Worker("Andrey Stahanov", 29);
$worker->setSalary(16);
$worker->makePaid("10.07.1935","");
$worker->makePaid("10.08.1935", 17);
$worker->makePaid("31.08.1935", 220);
echo $worker.PHP_EOL;
echo $worker->getListPaid().PHP_EOL;
//=========================

echo "\n\n===Test Manager===========\n";
$manager = new Manager("Nikolay Mashurov", 47);
echo $manager.PHP_EOL;
echo $manager->getListWorker();
echo "Added worker...".PHP_EOL;
$manager->addSubordination($worker);
$manager->addSubordination(new Worker("Tihon Borisenko", 22));
echo $manager->getListWorker();
echo "\nDeleted worker...".PHP_EOL;
$manager->delSubordination($worker);
echo $manager->getListWorker();

echo "\n\n===Test Count===========\n";
echo Manager::$count.PHP_EOL;
print_r(Manager::$class_count);
echo Manager::getClassCount().PHP_EOL;
echo Worker::getClassCount().PHP_EOL;







