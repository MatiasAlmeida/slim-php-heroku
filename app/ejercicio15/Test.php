<?php

include './Rectangulo.php';
include './Triangulo.php';

$newRectangle = new Rectangulo(4, 5);
$newTriangle = new Triangulo(2, 5);

$newRectangle->Dibujar();
$newRectangle->__toString();
