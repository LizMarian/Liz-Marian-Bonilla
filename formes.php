<!DOCTYPE html>
<html>
<head>
    <title>Formulario Registro_empleados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Registrar empleados</h2>
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="Dirreccion">Dirrección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="Apellido">Apellido:</label><br>
        <input type="text" id="Apellido" name="apellido" required><br><br>

        <label for="Correo">Correo:</label><br>
        <input type="text" id="Correo" name="Correo" required><br><br>

        <label for="Telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>