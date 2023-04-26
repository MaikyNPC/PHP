<?php

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];


if ($edad < 0 || $edad > 100) {
    echo "Por favor ingrese una edad válida.";
} else {
    if ($edad >= 18) {
        echo "Hola " . $nombre . ", usted es mayor de edad.";
    } else {
        echo "Hola " . $nombre . ", usted es menor de edad.";
    }
}

?>
