<?php
function smile()
{
    echo "๏̯͡๏";
}
function countRX($string)
{
    $pattern="#\:\)#";
    preg_match("/packets:([^\s]*)/",$string,$match);
    $str1=$match[1];
            if ($str1 > 1000){
            echo "Сеть есть";
        }
    elseif (preg_match($pattern,$string))
    {
        echo smile();
    }
    else
        echo "Сети нет";
}
echo countRX("RX packets:)101 errors:0 dropped:0 overruns:0 frame:0.");
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 16.08.2016
 * Time: 23:52
 */