<?php
/*
Almeida Matias
Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).
*/

$numero = null;

for($numero = 1; $numero < 5; $numero++) {
    calcular_potencia($numero);
}

function calcular_potencia($num) {
    for ($i=1; $i < 5; $i++) { 
        printf("%d^%d: %d<br>", $num, $i, pow($num,$i));
    }
}

?>