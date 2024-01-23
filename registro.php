<!-- registro.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>

<h2>Registro de Usuario</h2>

<form action="procesar_registro.php" method="post" enctype="multipart/form-data">
    <label for="email">Correo:</label>
    <input type="email" name="email" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required><br>

    <label for="archivo">Archivo (JPG o PDF):</label>
    <input type="file" name="archivo" accept=".jpg, .pdf" required><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
