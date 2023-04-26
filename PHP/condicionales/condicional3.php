<?php

// Obtenemos el número ingresado por el usuario desde un formulario o mediante otro medio
$numero = $_POST["numero"];

// Verificamos si el número es negativo
if ($numero < 0) {
    echo "El número ingresado es negativo.";
} 
// Verificamos si el número es positivo
else if ($numero > 0) {
    echo "El número ingresado es positivo.";
} 
// Si el número no es ni positivo ni negativo, entonces es cero
else {
    echo "El número ingresado es cero.";
}

?>
