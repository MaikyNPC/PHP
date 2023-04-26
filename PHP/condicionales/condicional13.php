<?php

// Leer el peso y la talla de la persona
$peso = readline("Ingrese su peso en Kg: ");
$talla = readline("Ingrese su talla en metros: ");

// Calcular el IMC
$imc = $peso / ($talla * $talla);

// Mostrar el estado correspondiente según el IMC
if ($imc < 18.5) {
    echo "Su IMC es $imc y está Desnutrido\n";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Su IMC es $imc y está en estado Normal\n";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Su IMC es $imc y está en estado de Sobrepeso\n";
} elseif ($imc >= 30 && $imc < 35) {
    echo "Su IMC es $imc y está en estado de Obesidad Grado 1\n";
} elseif ($imc >= 35 && $imc < 40) {
    echo "Su IMC es $imc y está en estado de Obesidad Grado 2\n";
} else {
    echo "Su IMC es $imc y está en estado de Obesidad Grado 3\n";
}

?>

