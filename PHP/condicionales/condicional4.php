<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if ($numero1 > $numero2) {
    $mayor = $numero1;
    $menor = $numero2;
} else {
    $mayor = $numero2;
    $menor = $numero1;
}


echo "El número mayor es " . $mayor . " y el número menor es " . $menor . ".";

?>
