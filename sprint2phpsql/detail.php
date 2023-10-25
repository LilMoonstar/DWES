 <?php
// Establecer la conexión a la base de datos
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
<head>
    <title>Detalles del Juego y Comentarios</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #55ed71;
            color: #white;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-weight: bold;
        }

        h1 {
            font-weight: bold;
            text-align: center;
            color: black;
        }

        h3 {
            font-weight: bold;
            text-align: center;
            color: #03290e;
        }

        .game-details {
            border: 1px solid #fff;
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            color: #000;
        }

        .comment {
            border: 1px solid #fff;
            margin: 10px;
            padding: 10px;
            background-color: white;
            color: #03290e;
        }

        img {
            max-width: 500px;
            max-height: 500px;
            display: block;
            margin: 0 auto;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
if (!isset($_GET['id'])) {
    die('No se ha especificado un juego');
}
$juego_id = $_GET['id'];

// Consulta para obtener los detalles del juego
$query = "SELECT * FROM tJuegos WHERE id = $juego_id";
$result = mysqli_query($db, $query) or die('Error en la consulta');
$game_details = mysqli_fetch_assoc($result);


echo '<h1>Detalles del Juego</h1>';
echo '<p>Nombre del juego: ' . $game_details['nombre'] . '</p>';
echo '<img src="' . $game_details['url_imagen'] . '" alt="Imagen del juego">';
echo '<p>Año de Lanzamiento: ' . $game_details['añolanzamiento'] . '</p>';
echo '<p>Categoría: ' . $game_details['categoría'] . '</p>';

// Consulta para obtener los comentarios relacionados con el juego
$query_comments = 'SELECT * FROM tComentarios WHERE juego_id ='.$juego_id;
$result_comments = mysqli_query($db, $query_comments) or die('Error en la consulta de comentarios');

echo '<h3>Comentarios:</h3>';
while ($comment = mysqli_fetch_assoc($result_comments)) {
    	echo '<div class="comment">';
	echo '<li>'.$comment['comentario'].'</li>';
	echo '</div>';
}

// Cerrar la conexión a la base de datos

mysqli_close($db);
?>

<br>
<h3>Inserta tu comentario aquí: </h3>

<form action="/comentario.php"method="post">
<textarea rows="4" cols="50" name="new_comment"></textarea><br>
<input type="hidden" name="id" value="<?php echo $juego_id;?>">
<input type="submit" value="Comentar">


</form>

</body>
</html>
