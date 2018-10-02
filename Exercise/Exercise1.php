<?php
/**
 * Created by PhpStorm.
 * User: vladimir.molodik
 * Date: 28.09.2018
 * Time: 17:30
 */

/**
*1.1. Есть массив Имен и есть текст внутри которого присутсвуют имена
*Найти количество раз, когда имя было ошибочно написано с маленькой буквы
*1.2. Взять свое имя
*Подсчитать, сколько раз в тексте присутсвует каждая буква из вашего имени
*1.3. Текст произвольной длины, если текст большей, чем 50 символов длины, то обрезать его до 47 символов и в конце поставить "..." Троеточие не должно идти после пробела
*1.4. То же самое, что и в предыдущем примере, но поставить, чтобы обрезание происходило по концу слова, а не посредине (для простоты по пробелу определяем конец слова)
 */

//====Exercise 1.1 ==================
//1.1. Есть массив Имен и есть текст внутри которого присутсвуют имена
//Найти количество раз, когда имя было ошибочно написано с маленькой буквы
$arr_names = array("Вова","Данил", "Анна", "Maria");
$long_text = "Этот текст содержит множество имен, например    'Вова',\"Данил\", \"Анна\", но некоторые имена написаны с ошибками. Такие как данил анна, еще анна ";
$arr_count = array();

foreach($arr_names as $name){
    $name_lower = strtolower($name);
    $count =  substr_count( $long_text , $name_lower );
    if($count)$arr_count[$name] = $count;
  }

//print_r($arr_names);
print_r($long_text);
echo PHP_EOL."Количество раз, когда имя было ошибочно написано с маленькой буквы:".PHP_EOL;
print_r($arr_count);
//===================================

//====Exercise 1.2 ==================
//1.2. Взять свое имя
//Подсчитать, сколько раз в тексте присутсвует каждая буква из вашего имени
$my_name = "Владимир";
$arr_my_name = str_split($my_name);
$arr_count_word = array();
foreach ($arr_my_name as $word){
    $arr_count_word[$word] = substr_count( $long_text , $word );
   // echo PHP_EOL . $word;
}
print_r($arr_count_word);
//===================================

//====Exercise 1.3 ==================
//
$long_text = "Текст произвольной длины, если текст большей   чем 50 символов длины, то обрезать его до 47 символов и в конце поставить \"...\" Троеточие не должно идти после пробела";
echo $long_text . PHP_EOL;
$end_str = 46;
while ( $long_text{$end_str} == ' ' && $end_str>0){
    //echo "Last word: ". $end_str." - ".$long_text{$end_str} ;
    $end_str--;
}

echo mb_strimwidth($long_text, 0, $end_str+4, "...", 'windows-1251');
echo PHP_EOL."Symbol number47 is - '".$long_text{46}."'" . PHP_EOL;
//===================================

//====Exercise 1.4 ==================
//
$long_text = "То же самое, что и в предыдущем примере, но  поставить, чтобы обрезание происходило по концу слова, а не посредине (для простоты по пробелу определяем конец слова)";
echo $long_text . PHP_EOL;
$end_str = 46;
while ($long_text{$end_str} != ' ' && $end_str>1){
    $end_str--;
}
while ( $long_text{$end_str} == ' ' && $end_str>0){
    $end_str--;
}
echo mb_strimwidth($long_text, 0, $end_str+4, "...", 'windows-1251');
echo PHP_EOL."Symbol number47 is - '".$long_text{46}."'" . PHP_EOL;
//===================================


echo PHP_EOL."....To display the Cyrillic alphabet correctly, run the command: 'chcp 1251'". PHP_EOL;

//echo "Bla-bla" . PHP_EOL;
//echo strtolower("БОЛЬШИЕбуквы") . PHP_EOL;
//$str = "Mary Had A Little Lamb and She LOVED It So";
//$str = strtolower($str);
//echo $str; // выводит: mary had a little lamb and she loved it so`

// echo $name . PHP_EOL;
// echo $name_lower . PHP_EOL;
// echo substr_count( $long_text , $name_lower ) . PHP_EOL;
// echo "Bla-bla" . PHP_EOL;

//  $arr_count[$name] = $name_lower; //. substr_count ( $long_text , $name_lower );
//  $arr_count[$name] = "asdfa";

