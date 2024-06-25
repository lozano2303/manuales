<?php
function calcularedad($anioact, $anionac) {
    $aniact = $anioact;
    $aninac = $anionac;
    $edad = $aniact - $aninac;
    if ($edad >= 18) {
        $resultado = "Es mayor de edad";
    } else {
        $resultado = "Es menor de edad";
    }
    return $resultado;
};

$calcularedad = function($anioact, $anionac) {
$aniact = $anioact;
$aninac = $anionac;
    $edad = $aniact - $aninac;
    if ($edad >= 18) {
        $resultado = "Es mayor de edad";
    } else {
        $resultado = "Es menor de edad";
    }
    return $resultado;}


?>