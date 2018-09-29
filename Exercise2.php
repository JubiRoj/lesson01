<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 29.09.2018
 * Time: 21:07
 */
/**
*2.1. Найти произведение всех чисел через reduce
*2.2. Получить массив, состоящий только из четных элементов массива
*2.3. Получить масив, в котором все значения возведены в квадрат
 */


//====Exercise 2.1 ==================
//*2.1. Найти произведение всех чисел через reduce
/**
 * @param $prod
 * @param $item
 * @return mixed
 */
function multiplication($prod , $item )
{
    $prod *= $item;
    return $prod;
}

$a = array(1, 2, 3, 5, 8); //fibonacci numbers
print_r($a);
echo "Multiplication in the array:". PHP_EOL;
var_dump(array_reduce($a, "multiplication", 1)); // int(240), потому что: 1*1*2*3*5*8
//===================================

//====Exercise 2.2 ==================
//*2.2. Получить массив, состоящий только из четных элементов массива
echo "Even keys in the array:". PHP_EOL;
var_dump(array_filter($a, function($k) {
    return $k % 2 === 0; //$k % 2 === 1; -- for odd
}, ARRAY_FILTER_USE_KEY));

//===================================

//====Exercise 2.3 ==================
//*2.3. Получить масив, в котором все значения возведены в квадрат
function square($n)
{
    return($n * $n);
}

//$a = array(1, 2, 3, 4, 5);
echo "Square numbers in the array:". PHP_EOL;
$b = array_map("square", $a);
print_r($b);

//===================================