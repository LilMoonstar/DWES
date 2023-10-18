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
    <title>Juegos</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #363232;
            color: #000;
        }

        h1 {
            font-weight: bold;
            text-align: center;
            color: #cc472b;
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
        }
    </style>
</head>

<body>
    <h1>Juegos</h1>
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
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
mysqli_close($db);
?>
<h1>Conexión establecida</h1>
