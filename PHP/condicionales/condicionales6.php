<!DOCTYPE html>
<html>
<head>
	<title>Calcular áreas de figuras geométricas</title>
</head>
<body>

	<h1>Calcular áreas de figuras geométricas</h1>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<label>Seleccione la figura geométrica:</label>
		<select name="figura">
			<option value="cuadrado">Cuadrado</option>
			<option value="rectangulo">Rectángulo</option>
			<option value="triangulo">Triángulo</option>
			<option value="circulo">Círculo</option>
			<option value="rombo">Rombo</option>
			<option value="trapecio">Trapecio</option>
		</select>
		<br><br>
		<label>Ingrese las medidas de la figura:</label>
		<input type="number" name="medida1" placeholder="Medida 1">
		<input type="number" name="medida2" placeholder="Medida 2">
		<input type="number" name="medida3" placeholder="Medida 3 (opcional)">
		<br><br>
		<input type="submit" name="submit" value="Calcular">
	</form>

	<?php


	if (isset($_POST["submit"])) {


		$figura = $_POST["figura"];
		$medida1 = $_POST["medida1"];
		$medida2 = $_POST["medida2"];
        $altura = $_POST["altura"];
		$medida3 = isset($_POST["medida3"]) ? $_POST["medida3"] : null;


		switch ($figura) {
			case "cuadrado":
				$area = $medida1 * $medida1;
				break;
			case "rectangulo":
				$area = $medida1 * $medida2;
				break;
			case "triangulo":
				$area = ($medida1 * $medida2) / 2;
				break;
			case "paralelogramo":
				$area =  $medida1 * $altura;
				break;
			case "rombo":
				$area = ($medida1 * $medida2) / 2;
				break;
			case "trapecio":
				$area = ($medida1 + $medida2) * $medida3 / 2;
				break;
            case "triangulo equilatero":
                $area = $medida1 * $medida1 * sqrt(3) / 4;
                break;
			default:
				$area = null;
				break;
		}

		if ($area != null) {
			echo "<br><br>";
			echo "El área de la figura seleccionada es: " . $area;
		} else {
			echo "<br><br>";
			echo "Ha ocurrido un error al calcular el área.";
		}

	}

	?>

</body>
</html>
