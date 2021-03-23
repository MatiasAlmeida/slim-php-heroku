<?php
/*
Almeida Matias
Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).
*/

for($i = 0; $i < 4 ; $i++) {
    for ($j=0; $j < 4; $j++) { 
        printf("%d^%d: %d", $i, $j, pow($i,$j));
    }
}


?>