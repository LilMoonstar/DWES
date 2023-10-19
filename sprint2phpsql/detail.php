<?php
// Establecer la conexión a la base de datos
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<!DOCTYPE html>
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
$query_comments = "SELECT * FROM tComentarios WHERE juego_id = $juego_id";
$result_comments = mysqli_query($db, $query_comments) or die('Error en la consulta de comentarios');

echo '<h3>Comentarios:</h3>';
while ($comment = mysqli_fetch_assoc($result_comments)) {
    echo '<div class="comment">';
    echo '<p>Comentario: ' . $comment['comentario'] . '</p>';
    echo '<p>ID del usuario: ' . $comment['usuario_id'] . '</p>';
    echo '</div>';
}

// Formulario para agregar un nuevo comentario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el comentario
    $new_comment = $_POST['new_comment'];
    if (!empty($new_comment)) {
        $insert_query = "INSERT INTO tComentarios (comentario, usuario_id, juego_id) VALUES ('$new_comment', NULL, $juego_id)";
        mysqli_query($db, $insert_query) or die('Error al agregar el comentario');
        echo '<p>Nuevo comentario agregado</p>';
        // Redirigir a comentario.php con un mensaje de éxito
        header("Location: comentario.php?juego_id=$juego_id&success=1");
        exit;
    } else {
        echo '<p>El comentario está vacío y no se pudo agregar.</p>';
    }
}

echo '<form action="/detail.php?id=' . $juego_id . '" method="post">';
echo '<h3>Deja un nuevo comentario:</h3>';
echo '<textarea rows="4" cols="50" name="new_comment"></textarea><br>';
echo '<input type="submit" value="Comentar">';
echo '</form>';

// Cerrar la conexión a la base de datos
mysqli_close($db);
?>
</body>
</html>
