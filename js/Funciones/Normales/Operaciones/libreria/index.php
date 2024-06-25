<?php
function operaciones($poperador,$pnumeroUno,$pnumeroDos) {
    $operador=$poperador;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
    if ($operador == "suma") {
       $operacionResultado = suma2($pnumeroUno,$pnumeroDos);
    }else if ($operador == "resta") {
       $operacionResultado = resta2($pnumeroUno,$pnumeroDos);
    }else if ($operador == "multiplicacion") {
       $operacionResultado = multiplicacion2($pnumeroUno,$pnumeroDos);
    }else if ($operador == "division") {
       $operacionResultado = division2($pnumeroUno,$pnumeroDos);
    }else{
       $operacionResultado = "Error!!! no se puede operar";
    }
    return $operacionResultado;
 };
 function suma2($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $sumar = $pnumeroUno + $pnumeroDos;
    return $sumar;
 };
 function resta2($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $restar = $pnumeroUno - $pnumeroDos;
    return $restar;
 };
 function multiplicacion2($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $multiplicar = $pnumeroUno * $pnumeroDos;
    return $multiplicar;
 };
 function division2($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $dividor = $pnumeroUno / $pnumeroDos;
    return $dividor;
 };

 


$suma=function($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    $sumar = $pnumeroUno + $pnumeroDos;
    return $sumar;
};
$resta=function($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $restar = $pnumeroUno - $pnumeroDos;
    return $restar;
};
$multiplicacion=function($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    $multiplicar = $pnumeroUno * $pnumeroDos;
    return $multiplicar;
};
$division=function($pnumeroUno,$pnumeroDos){
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    $dividor = $pnumeroUno / $pnumeroDos;
    return $dividor;
};
$operacion = function($poperador,$pnumeroUno,$pnumeroDos) use ($suma,$resta,$multiplicacion,$division){
    $operador = $poperador;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
     if ($operador == "suma") {
        $operacionResultado = $suma($pnumeroUno,$pnumeroDos);
     }else if ($operador == "resta") {
        $operacionResultado = $resta($pnumeroUno,$pnumeroDos);
     }else if ($operador == "multiplicacion") {
        $operacionResultado = $multiplicacion($pnumeroUno,$pnumeroDos);
     }else if ($operador == "division") {
        $operacionResultado = $division($pnumeroUno,$pnumeroDos);
     }else{
        $operacionResultado = "Error!!! no se puede operar";
     }
     return $operacionResultado;
};

?>