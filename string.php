<?php
//contabilizar el numero de vocales de la cadena
$frase = "hoy es lunes";
//longitud dela cadena
echo  "la longitud de la cadena es:".strlen($frase);
$cuentavocales = 0;

for($i=0; $i < strlen($frase); $i++){
    if($frase[$i] == 'a' || $frase[$i] == 'e' || $frase[$i] == 'i' || $frase[$i] == 'o' || $frase[$i] == 'u'){
         $cuentavocales++;
     }
    echo $frase[$i]. "<br>";
}
echo "el total de vocales es :$cuentavocales<br>";

?>