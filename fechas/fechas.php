<?php
    date_default_timezone_set("America/Mexico_City"); // Define el zona horario con la que se va a trabajar.
    echo $fecha = date("d-m-Y"); // Devuelve la fecha con el formato que se le espefique.
    echo "<br>";
    // Obtener solo el dia
    echo "Dia: " . explode("-", $fecha)[0] . "<br>";
    echo "Mes: " . explode("-", $fecha)[1] . "<br>";
    echo "Año: " . explode("-", $fecha)[2] . "<br>";
?>