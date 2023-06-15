<?php

//10. Ejercicio de ordenamiento: Escribe un programa que ordene una lista de numeros ingresada por el usuario de menor a mayor utilizando el algoritmo de ordenamiento de burbuja.

$lista = readline("Ingrese una lista de números separados por espacios: ");

$numeros = explode(" ", $lista);

$numeros = array_map('intval', $numeros);

$tamano = count($numeros);
for ($i = 0; $i < $tamano - 1; $i++) {
    for ($j = 0; $j < $tamano - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

echo "Lista ordenada de menor a mayor: " . implode(" ", $numeros);
?>
