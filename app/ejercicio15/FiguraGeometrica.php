<?php
/*
Almeida Matias
Aplicación No 15 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,un método getter y setter para el atributo _color, un método virtual (ToString) y dosmétodos abstractos: Dibujar (público) y CalcularDatos (protegido).CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica delobjeto que lo invoque (retornar una serie de asteriscos que modele el objeto).

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

abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    protected function __construct($color, $perimetro, $superficie)
    {
        $this->_color = $color;
        $this->_perimetro = $perimetro;
        $this->_superficie = $superficie;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        return sprintf(
            'Datos del objeto:<br>Color: %s<br>Perimetro: %f<br>Superficie: %f<br>',
            $this->_color,
            $this->_perimetro,
            $this->_superficie
        );
    }

    public abstract function Dibujar();

    protected abstract function CalcularDatos();
}
