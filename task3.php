<?php
echo "<h4>Задание 3<h4/>";
function calcEverything($symbol,...$figures){
    foreach ($figures as $value){
        if (!is_numeric($value)) {
            exit("Необходимо всети только числовые значения");
        } else {
            switch ($symbol) {
                case "+":
                    $result = 0;
                    {
                        foreach ($figures as $v)
                            $result += $v;
                    }
                    break;
                case "-":
                    $result = 0;
                    {
                        foreach ($figures as $v)
                            $result -= $v;
                    }
                    break;
                case "*":
                    $result = 1;
                    {
                        foreach ($figures as $v)
                            $result *= $v;
                    }
                    break;
                case "/":
                    $result = 1;
                    {
                        foreach ($figures as $v)
                            if ($v === 0) {
                                exit("Деление на 0 невозможно!");
                            } else {
                                $result /= $v;
                            }
                    }
                    break;
            }
        }
    }echo $result;
}
echo calcEverything("*",1,2.5,3);
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 22:33
 */