<?php
/*
Almeida Matias
Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.
*/

//Hardcodear
$string = "Peperina";
$maxString = 3;

if(validate_charLength($string, $maxString) === 1) {
    print("$string pertenece a la lista.");
}else {
    print("$string no pertenece a la lista.");
}


function validate_charLength($palabra, $max) {
    $ret = 0;

    if(count_chars($palabra) < $max) {
        switch ($palabra) {
            case 'Recuperatorio':
                $ret = 1;
                break;
            case 'Parcial':
                $ret = 1;
                break;
            case 'Programación':
                $ret = 1;
                break;
        }
    }else {
        print("$palabra supera el límite máximo $max<br>");
    }

    return $ret;
}

?>