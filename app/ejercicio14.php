<?php
/*
Almeida Matias
Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
*/

$num = rand(1,1000);

printf("%d es par? -> %s", $num, (string)(esPar($num)));


function esPar($numero) {
    return $numero % 2 === 0;
}

function esImpar($numero) {
    !esPar($numero);
}

?>