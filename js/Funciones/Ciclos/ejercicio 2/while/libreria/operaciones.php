<?php
function contar1a5($contando) {
    $contar=$contando;
    $numero=4;
    while ($contar<=$numero) {
        $contar++;
        if ($contar%2==0) {
            echo $contar." Es par"."<br>";
        } else {
            echo $contar." Es impar"."<br>";
        }
    }
    return "Fin";
};

$contar1a5 = function ($contando) {
    $contar=$contando;
    $numero=4;
    while ($contar<=$numero) {
        $contar++;
        if ($contar%2==0) {
            echo $contar." Es par"."<br>";
        } else {
            echo $contar." Es impar"."<br>";
        }
    }
    return "Fin";
};
?>