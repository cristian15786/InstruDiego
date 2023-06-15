
<?php

function calcularDescuento($precioOriginal, $porcentajeDescuento) {
    $descuento = $precioOriginal * ($porcentajeDescuento / 100);
    $precioConDescuento = $precioOriginal - $descuento;
    return $precioConDescuento;
  }
  
$precioOriginal = 30000;
$porcentajeDescuento = 20; 

$precioConDescuento = calcularDescuento($precioOriginal, $porcentajeDescuento);

echo "Precio original: $" . $precioOriginal . "\n";
echo "Porcentaje de descuento: " . $porcentajeDescuento . "%\n";
echo "Precio con descuento: $" . $precioConDescuento . "\n";
?>