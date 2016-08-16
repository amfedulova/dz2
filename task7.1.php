<?php
echo "<h4>Задание 7.1<h4/>";
$str1="Карл у Клары украл Кораллы</p>";
echo str_replace("К","",$str1);
$str2="Две бутылки лемонада</p>";
echo str_replace("Две","Три",$str2);
//Решения при помощи регулярных выражений
/*$str1="Карл у Клары украл Кораллы</p>";
$pattern="/К/";
$replace="";
$str1=preg_replace($pattern,$replace,$str1);
echo $str1;
$str2="Две бутылки лемонада</p>";
$pattern="/Две/";
$replace="Три";
$str2=preg_replace($pattern,$replace,$str2);
echo $str2;*/
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 23:12
 */