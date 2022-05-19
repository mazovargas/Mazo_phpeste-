<?php
//array o arreglo datos de un mismo tipo almacenado en memoria.
$estudiantes = array('juan', 'carmen', 'daniel', 'lucy');

//establecer la cantidad de elementos del array. se emplea el count

echo "cantidad de elemento del array: ".count($estudiantes);

//recorrer el array con el foreach
$dato = '';
//recorre el array y almacena en dato el valor de cada posicion del array
echo "<table border='1' align='center'>
<thead>
    <tr>
        <th>Nombres</th>
    </tr>
</thead>";
echo"<tbody>";
foreach($estudiantes as $dato){
    echo "<tr><td>$dato</td></tr>";
}
echo "</tbody>";
echo "</table>";
?>