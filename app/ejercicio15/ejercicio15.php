<?php
/*
Almeida Matias
Aplicación No 15 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,
un método getter y setter para el atributo _color, un método virtual (ToString) y dos
métodos abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).

Ejemplo:
  *     *******
 ***    *******
*****   *******

Utilizar el método ToString para obtener toda la información completa del objeto, y luego
dibujarlo por pantalla.

Jerarquía de clases:

FiguraGeometrica (clase base)
Campos -> _color : string
          _perimetro : double
          _superficie : double
Métodos -> __construct() : void
           CalcularDatos() : void
           Dibujar() : string
           GetColor() : string
           SetColorString() : void
           ToString() : string

Rectangulo (hereda de FiguraGeometrica)
Campos -> _ladoDos : double
          _ladoUno : double
Métodos -> __construct(double l1, double l2) : void
           CalcularDatos() : void
           Dibujar() : string
           ToString() : string

Triangulo (hereda de FiguraGeometrica)
Campos -> _altura : double
          _base : double
Métodos -> __construct(double b, double h) : void
           CalcularDatos() : void
           Dibujar() : string
           ToString() : string


*/




?>