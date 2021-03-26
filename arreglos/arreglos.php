<?php
    // Un arreglo es un tipo de dato que puede tener n datos
    // a partir de un almacenamiento indexado.
    $arreglo = array();
    $arreglo[0] = "Juan";
    $arreglo[1] = 10;
    $arreglo[2] = "Falcultad :)";
    $arreglo[3] = "Autodidacta";
    var_dump($arreglo); // Muestra la informacion.
    echo $arreglo[2];
    echo count($arreglo);
    for($i = 0; $i < count($arreglo); $i++) {
        echo $arreglo[$i];
        echo "<br>";
        if($arreglo[$i] == "Autodidacta") {
            echo "Felicidades encontraste el dato!";
        }
    }
    // Se puede llenar el arreglo desde el inicio o por posicion.
    $arreglo_1 = array("Jose", 5, 6, 7, 8, 9, 10);
    
?>