<?php
$edad = intval($_POST["edad"]);

// intval se utiliza para convertir el valor de edad en un numero entero 
// $_POST "para obtener el valor de la edad y licencia"

if ($edad >= 18) {
  $licencia = $_POST["licencia"];
  if ($licencia == "si") {
    echo "Puedes conducir";
  } else {
    echo "Debes obtener una licencia primero";
  }
} else {
  echo "No puedes conducir";
}
?>