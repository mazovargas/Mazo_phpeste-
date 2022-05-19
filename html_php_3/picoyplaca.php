<?php
//establecer una variable en php
var_dump($semana);
//strtoupper: comvertir el texto en mayuscula
//strtolower: comvertir el texto en minuscula
$semana = strtolower ($_POST["semana"]);


//$dia = "lunes";
switch($semana){
    case"lunes":
    echo "pico y placa terminadas en 1";
    break;
    case "martes":
    echo "pico y placa terminados en 2";
    break;
    case "miercoles":
    echo "pico y placa terminados en 3";
    break;
    case "jueves":
    echo "pico y placa terminados en 4";
    break;
    case "viernes":
    echo "pico y placa terminados en 5";
    break;
    default:
    echo "dia incorrecto";
    break;
}
?>