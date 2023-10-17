<?php
//Establecer la conexión a la base de datos
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');

//Lanzar una consulta
	$query = 'SELECT * FROM tJuegos';
	$result = mysqli_query($db,$query) or die('Error en la consulta');

//HTML para mostrar los datos
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Comentarios</title>
		<style>
			.comment {
				border: 1px solid #ccc;
				margin: 10px;
				padding: 10px;
				}
			img{
				max-width: 500px;
				max-height: 5000px;
				}
			body{
				font-family: "Roboto", sans-serif;
			}

			h1{

			font-family: "Roboto", sans-serif;
			font-weight: bold;
			text-align: center;
			}

		</style>
	</head>
<body>
	<h1>Juegos</h1>
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
	//cerrar la conexion a la bd
	msqli_close($db);
?>



<h1>Conexión establecida</h1>
