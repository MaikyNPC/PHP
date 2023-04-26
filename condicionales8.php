<?php


$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

$numeros_ascendentes = array($numero1, $numero2, $numero3);
sort($numeros_ascendentes);

$numeros_descendentes = array($numero1, $numero2, $numero3);
rsort($numeros_descendentes);

echo "Números en orden ascendente: ";
foreach ($numeros_ascendentes as $numero) {
    echo $numero . " ";
}

echo "<br>";

echo "Números en orden descendente: ";
foreach ($numeros_descendentes as $numero) {
    echo $numero . " ";
}

?>
