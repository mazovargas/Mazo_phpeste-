<?php
/*realice un codigo que reciba un numeroentero positivo desde un formulario
y luego calcule la suma de los numeros enteros comprendidos entre 1 y el numero ingresado
tiempo de inicio, tiempo fin*/

$numeroentero = 7;
$suma=0;
for($i=1; $i <= $numeroentero; $i++){
    $suma= $suma + $i;   
}
    echo $suma."<br>";
?>