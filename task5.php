<?php
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
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 23:10
 */