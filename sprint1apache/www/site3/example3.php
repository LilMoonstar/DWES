<!DOCTYPE html>
<html>
<body>
<h1>Jubilación</h1>
<?php
	function edad_en_10_años($edad) {
		return $edad + 10;
}

if (isset($_GET["edad"])) {
	$edad = (int)$_GET["edad"];
	if (edad_en_10_años($edad) > 65) {
		echo "En 10 años tendrás edad de jubilación";
	} else {
		echo "¡Disfruta de tu tiempo!";
	}
} else {
	echo "Parámetro 'edad' no proporcionado.";
}
?>
</body>
</html>
