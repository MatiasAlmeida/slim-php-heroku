<?php
/*
Almeida Matias
Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
*/

$num = rand(1,1000);

printf("%d es par? -> %s<br>", $num, strval(esPar($num)));
printf("%d es impar? -> %s<br>", $num, strval(esImpar($num)));

function esPar($numero) {
    $bool = var_export($numero % 2 === 0, true);
    return $bool;
}

function esImpar($numero) {
    return esPar($numero) === 'TRUE' ? 'FALSE' : 'TRUE';
}

?>