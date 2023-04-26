<?php


$cateto1 = floatval(readline("Ingrese la longitud del primer cateto: "));
$cateto2 = floatval(readline("Ingrese la longitud del segundo cateto: "));


$hipotenusa = sqrt($cateto1 ** 2 + $cateto2 ** 2);


echo "La hipotenusa es: " . $hipotenusa . "\n";
?>