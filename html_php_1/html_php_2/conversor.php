<?php
    $Dolares = $_POST['Dolares'];
    $valordolar = 3797;

    if($Dolares >= 0 ){
        echo "los $Dolares dolares convertidos son:";
        echo $Dolares * 3797;
        
    }
    else{
        echo "los valores negativos no son aceptados";
    }

?>