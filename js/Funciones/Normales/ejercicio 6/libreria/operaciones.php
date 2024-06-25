<?php
function promedio1($nota1) {
    $not1 = $nota1;
    $promedios1 = ($not1*0.3)/100;
    return $promedios1;
};

function promedio2($nota2) {
    $not2 = $nota2;
    $promedios2 = ($not2*0.4)/100;
    return $promedios2;
};

function promedios($nota1,$nota2,$nota3) {
    $not1 = $nota1;
    $not2 = $nota2;
    $not3 = $nota3;
    $suma = promedio1($nota1) + promedio1($nota2) + promedio2($nota3);
    return $suma;
};



$promedio1=function($nota1) {
    $not1 = $nota1;
    $promedios1 = ($not1*0.3)/100;
    return $promedios1;
};

$promedio2=function($nota2) {
    $not2 = $nota2;
    $promedios2 = ($not2*0.4)/100;
    return $promedios2;
};

$promedios=function($nota1,$nota2,$nota3) use($promedio1,$promedio2) {
    $not1 = $nota1;
    $not2 = $nota2;
    $not3 = $nota3;
    $suma = $promedio1($nota1) + $promedio1($nota2) + $promedio2($nota3);
    return $suma;
};

?>