<?php

$n = floatval(readline("Ingrese un número: "));
$x = 1.0;

for ($i = 0; $i < 10; $i++) {
    $x = 0.5 * ($x + $n / $x);
}

echo "La raíz cuadrada de $n es: $x\n";

?>