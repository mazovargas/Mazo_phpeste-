<?php
//lectura de un archivo con php
//read: r = lectura
//write w = escritura
$archivo = fopen("datosEstudiantes.txt","r");//abrir el rchivo en modo lectura

var_dump($archivo);//verificar tipo de dato
while(!feof($archivo)){
    $registro = fgets($archivo);
    $registro1 =explode(";",$registro);
    echo $registro[0]."<br>";
}



?>
