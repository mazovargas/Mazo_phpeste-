<?php
/*tres candidatos se presentan a las elecciones del sena.
el candidato A obtiene 90 votos.
El candidato B obtiene 78 votos.
El candidato C obtiene 99 votos.
calcular e imprimir el porcentaje de votos obtenido por cada candidato.
*/

$candidatoA = 90;
$candidatoB = 78;
$candidatoC = 99;

$sumaABC = ($candidatoA + $candidatoB + $candidatoC) / 100;

echo "elporcentaje del candidado A es:".$candidatoA / $sumaABC;
print "<br>";
echo "elporcentaje del candidado B es:".$candidatoB / $sumaABC;
print "<br>";
echo "elporcentaje del candidado C es:".$candidatoC / $sumaABC;



?>