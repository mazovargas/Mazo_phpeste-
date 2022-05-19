<?php
/*
realice un algoritmo que dado el valor de una factura, calcule y muestre.
un impuesto del 10% si el valor de la factura esta entre 1000 y 10000
un descuento del 7% si el valor de la factura es inferior a 1000
un impuesto del 5% si el valor de la factura es superior a 10000
*/

$valorfactura = 15000;
    if($valorfactura >= 1000 && $valorfactura <= 10000){
      echo $valorfactura * 0.10; 

    }
    elseif($valorfactura <= 1000 ){
        echo $valorfactura * 0.07;

    }
    elseif($valorfactura >= 10000){
        echo $valorfactura * 0.05;

    }


?>