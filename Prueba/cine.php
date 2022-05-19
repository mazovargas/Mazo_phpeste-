<?php
interface cineSala
{
    public $numeroSala;
    public $nombre;
    public $numeroAsientos;

    function __construct()
    {
        $this->numeroSala;
        $this->nombre;
        $this->numeroAsientos;
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
