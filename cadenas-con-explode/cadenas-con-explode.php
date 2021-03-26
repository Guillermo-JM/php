<?php
    $var = "pedro jimenez lopez";
    $fecha = "03-03-2021";
    // Explode es una funcion que convierte un String a un arreglo
    // dependiendo de la construccion.
    $datos = explode(" ", $var);
    $paterno = $datos[1]; 
    var_dump($datos);
    echo $paterno;
    echo "<pre>";
    print_r($datos);
    echo "</pre>";

    $f = explode("-", $fecha);
    echo "El año de la fecha es: " . $f[2];
?>