<?php
function fs($nu1,$nu2) {
    $num1 = $nu1;
    $num2 = $nu2;
    if ($num1==$num2) {
        $resultado = "Son iguales";
    }else if ($num1>$num2) {
        $resultado= $num1 ." Es mayor";
    }else{
        $resultado= $num2 ." Es mayor";
    }
    return $resultado;
};

$fs2 = function ($nu1,$nu2) {
    $num1 = $nu1;
    $num2 = $nu2;
    if ($num1==$num2) {
        $resultado = "Son iguales";
    }else if ($num1>$num2) {
        $resultado= $num1 ." Es mayor";
    }else{
        $resultado= $num2 . " Es mayor";
    }
    return $resultado;
};
?>