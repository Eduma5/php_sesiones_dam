<?php
// contenido_privado.php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

setcookie("email", $_SESSION['email'], time() + 3600, "/");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contenido Privado</title>
</head>
<body>

<h2>Bienvenido al contenido privado</h2>

<!-- Resto del contenido privado -->

<a href="cerrar_sesion.php">Cerrar Sesión</a>

</body>
</html>

