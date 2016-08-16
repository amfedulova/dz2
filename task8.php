<?php
echo "<h4>Задание 8<h4/>";
$file=fread(fopen('test.txt', 'r'),1024);
echo $file;
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 23:12
 */