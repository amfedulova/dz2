<?php
function int($num1,$num2){
    if (!is_int($num1)){
        exit ("Первый параметр не является целочисленным");
    }elseif (!is_int($num2)) {
            exit ("Второй параметр не является целочисленным");
        }else
            echo '<table border="1">';
        for ($i=1; $i<=$num1; $i++){
            echo '<tr>';
            for ($j=1; $j<=$num2; $j++) {
                $r = $i * $j;
                if($r%2==0) echo "<td>($r)</td>";
                elseif($r%3==0) echo "<td>[$r]</td>";
                elseif($r%5==0) echo "<td>[$r]</td>";
                elseif($r%7==0) echo "<td>[$r]</td>";
                else echo "<td>$r</td>";
            }
            echo '</tr>';
        }
        echo "</table>";
    }
echo int(4,4);
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 22:45
 */