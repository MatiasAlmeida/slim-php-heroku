<?php
include './FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica
{
    private $_ladoUno; //width
    private $_ladoDos; //height

    public function __construct($l1 = 0, $l2 = 0)
    {
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
        $this->_perimetro = $this->_ladoUno * 2 + $this->_ladoDos * 2;
    }

    public function Dibujar()
    {
        for ($i = 0; $i < (int)$this->_ladoDos; $i++) {
            for ($j = 0; $j < (int)$this->_ladoUno; $j++) {
                echo '*';
            }
        }
    }

    public function __toString()
    {
        return parent::__toString() . sprintf('Altura: %f<br>Base: %f<br><br>', $this->_ladoUno, $this->_ladoDos);
    }
}
