<?php
function contar1a5($contando) {
    $contar=$contando;
    $numero=4;
    while ($contar<=$numero) {
        $contar++;
        echo $contar."<br>";
    }
    return "Fin";
};
$contar1a5=function ($contando) {
    $contar=$contando;
    $numero=4;
    while ($contar<=$numero) {
        $contar++;
        echo $contar."<br>";
    }
    return "Fin"  ;
}

?>