<?php
//recibir las variables con el metodo POST
$referencia = $_POST['Referencia'];// recibir la variable referencia
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];

if($referencia != "" && $Nombre != "" && $Precio != ""){
    echo "En desarrollo... <br>";
    echo "Referencia: $referencia";
    echo "<br>";
    echo "Nombre: $Nombre";
    echo "<br>";
    echo "Precio: $Precio";
    echo "<br>";
}
else{
    echo "los campos no pueden estar vacios";
}

?>