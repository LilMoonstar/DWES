<?php
$db = mysqli_connect('localhost','root','1234','mysitedb')or die('Fail');
?>
<html>
<head>
    <style>
        body {
            background-color: #cfe2f3; 
            font-family: "Roboto", sans-serif;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            color: black;
        }
    </style>
</head>
<body>

<?php

// Carga de variables

$juego_id=$_POST['juego_id'];
$comentario=$_POST['new_comment'];

// Inserción del contenido del comentario en la tabla de SQL

$query = "INSERT INTO tComentarios (comentario,usuario_id,juego_id) VALUES ('$comentario',NULL,'$juego_id')";
mysqli_query($db,$query) or die('Error de creacion');

//Texto de la página

echo "<p>Nuevo comentario número ".mysqli_insert_id($db)." añadido con éxito</p>";
echo "<a href='/detail.php?juego_id=".$juego_id."'>Volver a los comentarios</a>";

// Cerrar la base de datos
mysqli_close($db);

?>
</body>
</html>