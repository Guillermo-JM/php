<?php
    // Un if anidado es una estructura de control que permite validar multiplex caso a la vez.
    $edad = 10;
    if($edad == 5) {
        echo "Es un niño!";
    } else if($edad == 15) {
        echo "Es un puberto!";
    } else if($edad == 20) {
        echo "Es un adulto joven!";
    } else {
        echo "No se que es!";
    }
?>