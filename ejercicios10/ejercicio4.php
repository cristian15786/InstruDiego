<?php

//4. Ejercicio de palindromos: Escribe un programa que verifique si una palabra ingresada pro el usuario es un palindromo (se lee de izquierda a derecha y de derecha a izquierda)

$palabra = readline("Ingrese una palabra: ");

$palabra = str_replace(' ', '', strtolower($palabra));

$esPalindromo = ($palabra == strrev($palabra));

if ($esPalindromo) {
    echo "La palabra '$palabra' es un palíndromo.";
} else {
    echo "La palabra '$palabra' no es un palíndromo.";
}
?>
