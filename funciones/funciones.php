<?php
    // Funcion normal de PHP.
    function mi_funcion() {
        // Mostrar un nombre.
        return "Esto es un nombre";
    }
    echo mi_funcion();
    // Funciones escalares
    function mi_funcion_2($valor_a, $valor_b, $opcion) {
        switch($opcion) {
            case "suma":
                return $valor_a + $valor_b;
                break;
            case "resta":
                return $valor_a - $valor_b;
                break;
            case "multiplicacion":
                return $valor_a * $valor_b;
                break;
            case "division":
                return $valor_a / $valor_b;
                break;
        }
    }
    echo mi_funcion_2(10, 10, "resta");
?>