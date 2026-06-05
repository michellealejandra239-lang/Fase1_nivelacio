<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>

<h2>Formulario de Registro</h2>

<form action="logica.php" method="POST">

    Nombre:
    <input type="text" name="nombre">

    <br><br>

    Edad:
    <input type="number" name="edad">

    <br><br>

    <input type="submit" value="Registrar">

</form>

</body>
</html>

<?php

function registrarUsuario($nombre, $edad){
    return "Usuario registrado: " . $nombre . " - Edad: " . $edad;
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

echo registrarUsuario($nombre, $edad);

?>