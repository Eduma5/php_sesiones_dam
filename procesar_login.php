<?php
// procesar_login.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "test");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $query = "SELECT * FROM act05 WHERE email = '$email'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($password, $usuario['password'])) {
            // Inicio de sesión exitoso, mostrar contenido privado
            session_start();
            $_SESSION['email'] = $email;
            header("Location: contenido_privado.php");
            exit();
        } else {
            echo "<p>Contraseña incorrecta</p>";
        }
    } else {
        echo "<p>Usuario no encontrado</p>";
    }

    $conexion->close();
} else {
    // Manejo de solicitud incorrecta
    header("Location: login.php");
    exit();
}
?>
