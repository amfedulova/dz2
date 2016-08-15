<?php
echo "<h4>Задание 1<h4/>";
function f1($str=array(),$i)
{    foreach ($str as $value)
    echo "$value</p>";
    {if ($i==true)
        return $result=implode(" ",$str);
        else die;
    }
}
echo f1($str=array("How","you","doing","?"),true);
echo "<h4>Задание 2<h4/>";
function f2($array,$symbol)
{
    if (!isset($array[0])) {
        echo("Массив пуст");
    }
    foreach ($array as $value) {
        if (!is_numeric($value)) {
            echo("Массив должен содержать только числа");
        } else {
            switch ($symbol) {
                case "+":
                    $result = 0;
                    {
                        foreach ($array as $v)
                            $result += $v;

                    }
                    break;
                case "-":
                    $result = 0;
                    {
                        foreach ($array as $v)
                            $result -= $v;

                    }
                    break;
                case "*":
                    $result = 1;
                    {
                        foreach ($array as $v)
                            $result *= $v;

                    }
                    break;
                case "/":
                    $result = 1;
                    {
                        foreach ($array as $v)
                            if ($v === 0) {
                                echo('Деление на 0 невозможно!');
                            } else {
                            $result /= $v;


                    }
                    break;

                    }
            }
        }
    }
}
$massiv=array(1,0,3);
echo f2($massiv,"+");
echo "<h4>Задание 5<h4/>";
function palindrom($str3)
{
    $str3 = str_replace(" ", "", $str3);
    $str3 = strtolower($str3);
    $arr = preg_split('//u', $str3, -1, PREG_SPLIT_NO_EMPTY);
    $arr1 = array_reverse($arr);
    if ($arr1 == $arr) {
        return true;
    } else {
        return false;
    }
}
function text($pal) {
    return $pal==true?"Строка является палиндромом":"Строка не является палиндромом";
}
echo text(palindrom("A bc"));
echo "<h4>Задание 6<h4/>";
echo date("d.m.Y H:i</p>");
echo mktime(0,0,0,2,24,2016);
echo "<h4>Задание 7.1<h4/>";
$str1="Карл у Клары украл Кораллы</p>";
echo str_replace("К","",$str1);
$str2="Две бутылки лемонада</p>";
echo str_replace("Две","Три",$str2);
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 14.08.2016
 * Time: 21:07
 */