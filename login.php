<!-- login.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>

<h2>Iniciar Sesión</h2>

<form action="procesar_login.php" method="post">
    <label for="email">Correo:</label>
    <input type="email" name="email" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>

