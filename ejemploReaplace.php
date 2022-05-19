<?php
//eliminar los @ y # de la siguiente frase.
$frase = "hoy es lunes @ mañana es martes #####";
echo "Datos sin limpiar: $frase<br>";

$frase = str_replace('@','',$frase);
$frase = str_replace('#','',$frase);

echo "Datos limpios: $frase<br>";
