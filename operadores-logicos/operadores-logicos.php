<?php
    // Los operadores logicos sriven para validar expresiones
    // tal es el caso de operador OR que sirve para validar
    // una sentencia u otra.
    // En el caso del operador AND que sriver para validar ambas sentencias.

    $resultado = 50;
    if($resultado < 51 and $resultado > 49) {
        //echo "es un numero 50 valido!";
    }
    $edad_valida = 25;
    if($edad_valida > 18 and $edad_valida < 26) {
        echo "La edad es valida!";
    }
    $sexo = "F";
    if($sexo == "M" or $sexo == "F") {
        echo "Sexo valido!";
    }
    // Operador diferente sirve para validar un dato que no corresponda a un dato a coracter.
    $dato = 5;
    if($dato != 10) {
        echo "Es un dato bueno!";
    }
    // La negacion sirve para realizar la validacion de algo que no ocurre.
    $dato_2 = true;
    if(!$dato_2) {
        echo "No es verdadero!";
    }
?>