<?php

//8. Ejercicio de numeros perfectos: Escribe un programa que encuentre todos los numeros perfecto en un rango especifico. Un numero perfecto es aquel cuya suma de sus divisores propios (excluyendo al numero mismo) es igual al numero.

$rangoInicial = readline("Ingrese el rango inicial: ");
$rangoFinal = readline("Ingrese el rango final: ");

if (!is_numeric($rangoInicial) || !is_numeric($rangoFinal) || $rangoInicial < 1 || $rangoFinal < 1 ||
    $rangoInicial != intval($rangoInicial) || $rangoFinal != intval($rangoFinal) || $rangoFinal <= $rangoInicial) {
    echo "Los rangos ingresados no son válidos.";
    exit;
}

for ($numero = $rangoInicial; $numero <= $rangoFinal; $numero++) {
    $sumaDivisores = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }

    if ($sumaDivisores == $numero) {
        echo "El número $numero es un número perfecto." . PHP_EOL;
    }
}
?>
