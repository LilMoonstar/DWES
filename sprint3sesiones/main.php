<?php
// Establecer la conexión a la base de datos
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');

// Lanzar una consulta
$query = 'SELECT * FROM tJuegos';
$result = mysqli_query($db, $query) or die('Error en la consulta');
?>

<!DOCTYPE html>
<html>
<head>
    <title>JUEGOS</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #363232;
	    color: #c4bcbb;
	    max-width: 800px;
	    margin: 0 auto;
	    padding: 20px;
	    font-weight: bold;
        }

        h1 {
            font-weight: bold;
            text-align: center;
            color: #cc472b;
        }
	
	h3 {
	font-weight: bold;
	text-align: center;
	color: white;
}

        .comment {
            border: 1px solid #fff;
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            color: #000;
        }

        img {
            max-width: 500px;
            max-height: 5000px;
       	    display: block;
	    margin: 0 auto;

	 }
    </style>
</head>

<body>

    <h1>JUEGOS</h1>
<h3>Una selección de cinco juegos, su título, año de lanzamiento, categoría y una foto de referencia. Además de un enlace con información extra.</h3><br>
    <?php
    // Recorrer el resultado
    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="comment">';
        echo '<p>Nombre: ' . $row[1] . '</p>';
        echo '<p>Año de lanzamiento: ' . $row[3] . '</p>';
        echo '<p>Categoría: ' . $row[4] . '</p>';
        // Enlace para ver más detalles
        echo '<a href="/detail.php?id=' . $row['id'] . '">Ver detalles</a> <br>';
        // Mostrar la imagen
        echo '<img src="' . $row[2] . '" alt="Imagen del juego">';
        echo '</div>';
    }
    ?>
	<?php
	//Recorrer el resultado
	while ($row = mysqli_fetch_array($result)) {
		echo '<div class="comment">';
		echo '<p>Nombre: '.$row[1]. '</p>';
		echo '<p>Año de lanzamiento: '.$row[3]. '</p>';
		echo '<p>Categoría: '.$row[4]. '</p>';
	//enlace para ver más detalles
		echo '<a href="/detail.php?id=' .$row['id']. '">Ver detalles</a> <br>';	
	//Mostrar la imagen
		echo '<img src="'.$row[2].'"alt="Imagen del juego">';
		echo '</div>';
	}
	?>

</body>
</html>

<?php

	// Cerrar la conexión a la base de datos
	mysqli_close($db);
	//cerrar la conexion a la bd
	mysqli_close($db);

?>