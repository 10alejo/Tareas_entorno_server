<?php
function calSuma($valor1, $valor2, &$resultado){
    $resultado = $valor1 + $valor2;
    return $resultado;
}
function calResta($valor1, $valor2, &$resultado){
    $resultado = $valor1 - $valor2;
    return $resultado;
}
function calDivision($valor1, $valor2, &$resultado){
    $resultado = $valor1 / $valor2;
    return $resultado;
}
function calMultiplicacion($valor1, $valor2, &$resultado){
    $resultado = $valor1 * $valor2;
    return $resultado;
}
function calPotencia($valor1, $valor2, &$resultado){
    $resultado = $valor1 ** $valor2;
    return $resultado;
}



?>