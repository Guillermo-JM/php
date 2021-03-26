<?php
    // Es una estructura de control iterativo o repetitiva
    // que funciona siempre y cuando la condicion sea valida.
    $condicion = 0;
    while($condicion < 10) {
        echo "Se cumple la condicion!";
        echo "<br>";
        echo $condicion++;
        echo "<br>";
    } 
    // Como hacer un while infinito.
    while(true) {}
?>