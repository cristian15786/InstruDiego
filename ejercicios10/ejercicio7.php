<?php

//7. Ejercicio de búsqueda: Escribe un programa que busque un elemento especifico en una lista ingresada por el usuario y muestre su posición

$lista = readline("Ingrese una lista de elementos separados por espacios: ");

$elemento = readline("Ingrese el elemento a buscar: ");

$elementos = explode(" ", $lista);

$posicion = array_search($elemento, $elementos);

if ($posicion !== false) {
    echo "El elemento '$elemento' se encuentra en la posición $posicion.";
} else {
    echo "El elemento '$elemento' no se encuentra en la lista.";
}
?>
