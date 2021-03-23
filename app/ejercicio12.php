<?php
/*
Almeida Matias
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/
$palabra = "HOLA";
$palabraInvertida = invertir_palabra($palabra);

print("Palabra: $palabra<br>Palabra invertida: $palabraInvertida");

function invertir_palabra($string) {
    return strrev($string);
}

?>