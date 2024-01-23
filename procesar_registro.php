<?php
// procesar_registro.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "test");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Insertar datos en la tabla
    $query = "INSERT INTO act05 (email, password) VALUES ('$email', '$password')";
    $conexion->query($query);

    // Mover el archivo a una ubicación específica
    $archivoNombre = $_FILES['archivo']['name'];
    $archivoTemporal = $_FILES['archivo']['tmp_name'];
    $destino = "archivos_almacenados/$archivoNombre";

    move_uploaded_file($archivoTemporal, $destino);

    $conexion->close();

    // Redireccionar a la página de inicio de sesión
    header("Location: login.php");
    exit();
} else {
    // Manejo de solicitud incorrecta
    header("Location: registro.php");
    exit();
}
?>


