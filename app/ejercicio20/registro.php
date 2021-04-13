<?php

class Registro
{
    public $nombre;
    public $clave;
    public $mail;

    public static function ValidarDatos($usuario)
    {
        $response = null;

        if (isset($usuario->nombre) && isset($usuario->clave) && isset($usuario->mail)) {
            if ($usuario->nombre == "admin") {
            } else {
            }
        } else {
        }
    }
}

$usuario = new Registro();

$usuario->nombre = $_POST["usuario"];
$usuario->clave = $_POST["clave"];
$usuario->mail = $_POST["mail"];
