<?php
$servername = "localhost"; // Nombre del servidor (en este caso, local)
$username = "root"; // Nombre de usuario de la base de datos
$password = "1234567"; // Contraseña de la base de datos
$database = "papeleria_liz"; // Nombre de la base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa"; // Mensaje que se mostrará si la conexión es exitosa
?>