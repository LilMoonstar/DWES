<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail'); // CONEXIÓN ENTRE PHP y la base de datos.
    $oldpass = $_POST['old_pass'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if (empty($pass1) || empty($pass2)) {die('No dejes ningun campo vacio');}
    if ($pass1 != $pass2 ) { die('Las contrasenas no coinciden'); }
    $new_pass = password_hash($pass1,PASSWORD_DEFAULT);
    session_start();
    if (!empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        die ('Inicia sesión para cambiar la contrasena');
    }
    $query = 'SELECT contraseña FROM tUsuarios WHERE id='.$user_id;
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if (!password_verify($oldpass,$row[0])) {die('Contrasena no coincide');}
    $query2 = $db -> prepare("UPDATE tUsuarios SET contraseña=? where id=?;");
    $query2 -> bind_param("si",$new_pass,$user_id);
    $query2 -> execute();
    echo "<h1>Has cambiado la contrasena exitosamente</h1>";
    echo "<a href=/main.php>Volve</a>";
    $query2 -> close();
    mysqli_close($db);
?>
