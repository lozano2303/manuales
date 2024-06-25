<?php
function mayor_o_menor($edad) {
    $edad=$edad;
    if ($edad>=18) {
        $resultado = "Es mayor de edad";
    }else{
        $resultado = "Es menor de edad";
    }
    return $resultado;
};


$mayor_o_menor2 = function ($edad) {
    $edad=$edad;
    if ($edad>=18) {
        $resultado = "Es mayor de edad";
    }else{
        $resultado = "Es menor de edad";
    }
    return $resultado;
}
?>