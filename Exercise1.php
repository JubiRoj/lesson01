<?php
/**
 * Created by PhpStorm.
 * User: vladimir.molodik
 * Date: 28.09.2018
 * Time: 17:30
 */

/**
1.1. ���� ������ ���� � ���� ����� ������ �������� ����������� �����
����� ���������� ���, ����� ��� ���� �������� �������� � ��������� �����
1.2. ����� ���� ���
����������, ������� ��� � ������ ����������� ������ ����� �� ������ �����
1.3. ����� ������������ �����, ���� ����� �������, ��� 50 �������� �����, �� �������� ��� �� 47 �������� � � ����� ��������� "..." ��������� �� ������ ���� ����� �������
1.4. �� �� �����, ��� � � ���������� �������, �� ���������, ����� ��������� ����������� �� ����� �����, � �� ��������� (��� �������� �� ������� ���������� ����� �����)
 */

// Exercise 1.1.
$arr_names = array("����","�����", "����", "Maria");
$long_text = "���� ����� �������� ��������� ����, �������� '����',\"�����\", \"����\", �� ��������� ����� �������� � ��������. ����� ��� ����� ����, ��� ���� ";
$arr_count = array();

foreach($arr_names as $name){
    $name_lower = strtolower($name);
    $count =  substr_count( $long_text , $name_lower );
    if($count)$arr_count[$name] = $count;
  }

//print_r($arr_names);
//print_r($long_text);
//echo PHP_EOL."���������� ���, ����� ��� ���� �������� �������� � ��������� �����:".PHP_EOL;
//print_r($arr_count);

//Exercise 1.2
/**
$my_name = "��������";
foreach ($my_name as $word){
    echo PHP_EOL . $word;
}

*/
$my_name = "��������";
$arr = str_split($my_name);
print_r($arr);

//echo "Bla-bla" . PHP_EOL;
//echo strtolower("������������") . PHP_EOL;
//$str = "Mary Had A Little Lamb and She LOVED It So";
//$str = strtolower($str);
//echo $str; // �������: mary had a little lamb and she loved it so`

// echo $name . PHP_EOL;
// echo $name_lower . PHP_EOL;
// echo substr_count( $long_text , $name_lower ) . PHP_EOL;
// echo "Bla-bla" . PHP_EOL;

//  $arr_count[$name] = $name_lower; //. substr_count ( $long_text , $name_lower );
//  $arr_count[$name] = "asdfa";

