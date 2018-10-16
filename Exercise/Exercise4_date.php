<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 07.10.2018
 * Time: 14:02
 */

/*
 * Даты
*http://php.net/manual/ru/function.date.php
*http://php.net/manual/ru/class.datetime.php
*http://php.net/manual/ru/class.dateinterval.php
*
*1.1. Написать метод, который преобразовывает входящую дату в формате вида '2018-09-17 14:05:59'
 * в дату и время привычные в посденевном использованиии
*1.2. Написать скрипт, который выводит сколько времени прошло с вашего дня Рождения.
*А именнно
*25 лет
*305 месяцев
*...
*nnnnnnnnn секунд
*1.3. Написать метод, который на вход получает конкретное время а на выхое выдает строку
*только что
*или n минут назад
*или n часов назад
*или вчера
*или n дней назад
*или n месяцев назад
*или n лет назад
 *
 */

$d1=new DateTime('2018-09-17 14:05:59');
$d2=new DateTime("1986-11-30 11:30");
$diff=$d2->diff($d1);
//print_r( $d1 ) ;
//print_r( $d2 ) ;

echo $d1->format('H:i d F Y').PHP_EOL ;
echo $diff->y." years ago.".PHP_EOL ;
echo ($diff->y )*12 +($diff->m ) ." months ago.".PHP_EOL ;
echo $diff->days." days ago.".PHP_EOL ;
echo ($diff->days )*24+($diff->h ) ." hours ago.".PHP_EOL ;
echo (($diff->days )*24+($diff->i ))*60+($diff->s ) ." hours ago.".PHP_EOL ;

echo getAgo('2018-10-07 19:10:59').PHP_EOL ;
function getAgo($date){

    $d1=new DateTime();
    //$d1->setTimezone(new DateTimeZone('GMT'));
    $d2=new DateTime($date);
    $diff=$d2->diff($d1);
   // print_r( $d1 ) ;
  //  print_r( $d2 ) ;

    print_r( $diff ) ;
    if($diff->invert > 0) return " after time.";
    if($diff->y > 0) return $diff->y." years ago.";
    if($diff->m > 0) return $diff->m." months ago.";
    if($diff->d > 1) return $diff->d." days ago.";
    if($diff->d == 1) return " yesterday.";
    if($diff->h > 0) return $diff->h." hours ago.";
    if($diff->i > 0) return $diff->i." minutes ago.";
    if($diff->s > 0) return " now";

    return "Exeption datetime";
}

//print_r( $diff ) ;
