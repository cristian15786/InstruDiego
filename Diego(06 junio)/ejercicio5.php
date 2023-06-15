<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de PHP</title>
</head>
<body>

	<?php
		// Verificar si se han enviado los dos números mediante el método POST
		if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
			// Obtener los dos números
			$numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];

			// Verificar si ambos números son mayores que 10 utilizando la sentencia if y los operadores lógicos "&&" y ">"
			if ($numero1 > 10 && $numero2 > 10) {
				echo "Ambos números son mayores que 10";
			} elseif ($numero1 > 10 || $numero2 > 10) {
				echo "Solo uno de los números es mayor que 10";
			} else {
				echo "Ninguno de los números es mayor que 10";
			}
		}
	?>

	<form method="post">
		<label for="numero1">Ingrese el primer número:</label>
		<input type="number" id="numero1" name="numero1">

		<label for="numero2">Ingrese el segundo número:</label>
		<input type="number" id="numero2" name="numero2">

		<input type="submit" value="Verificar">
	</form>

</body>
</html>