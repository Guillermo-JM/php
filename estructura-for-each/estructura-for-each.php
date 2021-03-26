<?php
    // Es una estructura iterativa
    // que usa llaves o asociaciones de datos como indeces.
    $arreglo_colores = array(
        "coche" => "verde",
        "moto" => "roja",
        "avion" => "gris"
    );
    foreach($arreglo_colores as $key) {
        echo $key;
        echo "<br>";
    }
?>