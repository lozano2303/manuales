<?php
function salario2($dias,$valordia) {
    $diask=$dias;
    $vdias=$valordia;
    $total_salario= $diask*$vdias;
    return $total_salario;

};
function subtrans2($dias,$valordia) {
    $salarioMin= 1600000;
    $salariotrans=salario2($dias,$valordia);
    if ($salariotrans<=2*$salarioMin) {
        $subtransporte=114000;
    } else {
        $subtransporte=0;
    }
    return $subtransporte;
};
function  salud2($dias,$valordia) {
    $pago_salud=salario2($dias,$valordia)*0.12;
    return $pago_salud;
};
function pension2($dias,$valordia) {
    $pago_pension=salario2($dias,$valordia)*0.16;
    return $pago_pension;   
};
function deducible2($dias,$valordia) {
    $pago_deducible = pension2($dias,$valordia)+ salud2($dias,$valordia);
    return $pago_deducible;
};
function arl2 ($dias,$valordia) {
    $pago_arl = salario2($dias,$valordia)*0.052;
    return $pago_arl;
};
function pagototal2($dias,$valordia) {
    $pago_total = salario2($dias,$valordia)+subtrans2($dias,$valordia)-deducible2($dias,$valordia);
    return $pago_total;
};




$salario = function ($dias,$valordia) {
    $diask=$dias;
    $vdias=$valordia;
    $total_salario= $diask*$vdias;
    return $total_salario;

};
$subtrans=function ($dias,$valordia) use ($salario){
    $salarioMin= 1600000;
    $salariotrans=$salario($dias,$valordia);
    if ($salariotrans<=2*$salarioMin) {
        $subtransporte=114000;
    } else {
        $subtransporte=0;
    }
    return $subtransporte;
};
$salud = function ($dias,$valordia) use($salario) {
    $pago_salud=$salario($dias,$valordia)*0.12;
    return $pago_salud;
};
$pension=function ($dias,$valordia)use($salario) {
    $pago_pension=$salario($dias,$valordia)*0.16;
    return $pago_pension;   
};
$deducible = function ($dias,$valordia)use($pension,$salud) {
    $pago_deducible = $pension($dias,$valordia)+ $salud($dias,$valordia);
    return $pago_deducible;
};
$arl = function ($dias,$valordia) use($salario){
    $pago_arl = $salario($dias,$valordia)*0.052;
    return $pago_arl;
};
$pagototal = function ($dias,$valordia) use($salario,$subtrans,$deducible){
    $pago_total = $salario($dias,$valordia)+$subtrans($dias,$valordia)-$deducible($dias,$valordia);
    return $pago_total;
};

?>