<?php

function reverse($x) {
    $isNegative = $x<0;
    $str = strval(abs($x));

    $strrev = strrev($str);

    $intstr = intVal($strrev);

    if ($isNegative){
        $intstr = 0-$intstr;
    }

    if($intstr < -2147483648 || $intstr > 2147483648){
        return 0;
    }

    return $intstr;
}


//smart boys way, well this one actually not mine.. too stupid to think of this
function reverseInteger($x) {
    $result = 0;

    while ($x != 0) {
        $digit = $x % 10; 
        $x = intdiv($x, 10); 

        if ($result > (2147483647 - $digit) / 10 || $result < (-2147483648 - $digit) / 10) {
            return 0;
        }

        $result = $result * 10 + $digit;
    }

    return $result;
}