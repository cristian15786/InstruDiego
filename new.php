
<?php
$precio = 700; // Precio de cada computador
$cantidad = 7; // Cantidad de computadores comprados
$descuento = 0; // Inicializamos el descuento en 0

if ($cantidad < 5) {
    $descuento = 0.1; // 10% de descuento
} elseif ($cantidad >= 5 && $cantidad < 10) {
    $descuento = 0.2; // 20% de descuento
} else {
    $descuento = 0.4; // 40% de descuento
}

$precio_total = $precio * $cantidad * (1 - $descuento); // Calculamos el precio total con descuento
echo "El precio total con descuento es: $" . $precio_total;
?>
