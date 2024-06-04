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

        <label for="direccion">Dirrección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="correo">Correo:</label><br>
        <input type="text" id="correo" name="correo" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
     include ("conexion.php");
    ?> 
</body>
</html>