<?php
include './FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica
{
    private $_altura;
    private $_base;

    public function __construct($b = 0, $h = 0)
    {
        $this->_altura = $h;
        $this->_base = $b;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_superficie = ($this->_base * $this->_altura) / 2;
        $this->_perimetro = $this->_base * 3;
    }

    public function Dibujar()
    {
    }

    public function __toString()
    {
        return parent::__toString() . sprintf('Altura: %f<br>Base: %f<br><br>', $this->_altura, $this->_base);
    }
}
