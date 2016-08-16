<?php
echo "<h4>Задание 2<h4/>";
function f2($array,$symbol)
{
    if (!isset($array[0])) {
        echo("Массив пуст");
    }
    foreach ($array as $value) {
        if (!is_numeric($value)) {
            echo("Массив должен содержать только числа</p>");
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
                            if ($v === 0){
                                echo("Деление на 0 невозможно!</p>");
                            } else {
                                $result /= $v;
                            }
                    }break;
            }
        }
    }echo $result;
}
$massiv=array(1,2,3);
echo f2($massiv,"/");
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 23:09
 */