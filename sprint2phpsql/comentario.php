<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #cfe2f3; /* Color de fondo azul clarito */
            font-family: "Roboto", sans-serif;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
            color: black;
        }

        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .button {
            margin-top: 20px; /* Espacio entre la imagen y el botón */
        }
    </style>
</head>
<body>
<?php
// Verifica si se ha establecido la variable success en la URL
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo 'Comentario creado con éxito.';
} else {
    echo 'Hubo un problema al crear el comentario.';
}

// Agrega un botón para volver a detail.php
echo '<div class="center">';
echo '<img src="https://i.pinimg.com/474x/cb/ca/3b/cbca3b17684b9e153771ee6013261f4e.jpg" alt="Imagen" style="max-width: 500px; max-height: 500px;">';
echo '<div class="button"><a href="detail.php?id=' . $_GET['juego_id'] . '">Volver</a></div>';
echo '</div>';
?>
</body>
</html>
