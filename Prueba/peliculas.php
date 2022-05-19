<?php

class peliculas implements cineSala
{
    private $codigo;
    private $nombre;
    private $genero;
    private $año;
    private $duracion;

    function __construct()
    {
        $this->codigo = 2345;
        $this->nombre = "Aladín";
        $this->genero = "Infantil";
        $this->año = "2000";
        $this->duracion = "1.50";
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($name)
    {
        return $this->$name;
    }
}
