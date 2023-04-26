<?php

echo "Ejercicio de conversión de temperaturas\n";

echo "1. Fahrenheit a Celsius\n";
echo "2. Celsius a Fahrenheit\n";
echo "3. Celsius a Kelvin\n";
echo "4. Kelvin a Celsius\n";
echo "5. Fahrenheit a Kelvin\n";
echo "6. Kelvin a Fahrenheit\n";
echo "7. Fahrenheit a Rankine\n";
echo "8. Rankine a Fahrenheit\n";
echo "9. Celsius a Réaumur\n";
echo "10. Réaumur a Celsius\n";
$opcion = readline("Seleccione una opción: ");

switch ($opcion) {
    case 1:
        $fahrenheit = readline("Ingrese la temperatura en Fahrenheit: ");
        $celsius = ($fahrenheit - 32) * 5/9;
        echo "La temperatura en Celsius es: " . $celsius . "\n";
        break;
    case 2:
        $celsius = readline("Ingrese la temperatura en Celsius: ");
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "La temperatura en Fahrenheit es: " . $fahrenheit . "\n";
        break;
    case 3:
        $celsius = readline("Ingrese la temperatura en Celsius: ");
        $kelvin = $celsius + 273.15;
        echo "La temperatura en Kelvin es: " . $kelvin . "\n";
        break;
    case 4:
        $kelvin = readline("Ingrese la temperatura en Kelvin: ");
        $celsius = $kelvin - 273.15;
        echo "La temperatura en Celsius es: " . $celsius . "\n";
        break;
    case 5:
        $fahrenheit = readline("Ingrese la temperatura en Fahrenheit: ");
        $kelvin = ($fahrenheit + 459.67) * 5/9;
        echo "La temperatura en Kelvin es: " . $kelvin . "\n";
        break;
    case 6:
        $kelvin = readline("Ingrese la temperatura en Kelvin: ");
        $fahrenheit = ($kelvin * 9/5) - 459.67;
        echo "La temperatura en Fahrenheit es: " . $fahrenheit . "\n";
        break;
    case 7:
        $fahrenheit = readline("Ingrese la temperatura en Fahrenheit: ");
        $rankine = $fahrenheit + 459.67;
        echo "La temperatura en Rankine es: " . $rankine . "\n";
        break;
    case 8:
        $rankine = readline("Ingrese la temperatura en Rankine: ");
        $fahrenheit = $rankine - 459.67;
        echo "La temperatura en Fahrenheit es: " . $fahrenheit . "\n";
        break;
    case 9:
        $celsius = readline("Ingrese la temperatura en Celsius: ");
        $reaumur = $celsius * 4/5;
        echo "La temperatura en Réaumur es: " . $reaumur . "\n";
        break;
    case 10:
        $reaumur = readline("Ingrese la temperatura en Réaumur: ");
        $celsius = $reaumur * 5/4;
        echo "La temperatura en Celsius es: " . $celsius . "\n";
        break;
    default:
        echo "Opción no válida\n";
        break;
}
