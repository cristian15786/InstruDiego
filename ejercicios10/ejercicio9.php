<?php

//9. Ejercicio de fibonacci: Escribe un programa que genere la secuencia de Fibonacci hasta un numero ingresado por el usuario.

$limite = readline("Ingrese el número límite: ");

if (!is_numeric($limite) || $limite < 1 || $limite != intval($limite)) {
    echo "El número límite ingresado no es válido.";
    exit;
}

$secuencia = [0, 1];
while ($secuencia[count($secuencia) - 1] < $limite) {
    $next = $secuencia[count($secuencia) - 1] + $secuencia[count($secuencia) - 2];
    $secuencia[] = $next;
}

echo "Secuencia de Fibonacci hasta el número $limite:" . PHP_EOL;
foreach ($secuencia as $numero) {
    echo $numero . " ";
}
?>
