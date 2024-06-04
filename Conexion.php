<?php
// Configuración de la base de datos en un array
$db_config = array(
    'servername' => 'localhost', // Nombre del servidor (localhost si es en local)
    'username' => 'root', // Nombre de usuario de MySQL
    'password' => '123456789', // Contraseña de MySQL
    'dbname' => 'papeleria_bonilla' // Nombre de la base de datos
);

// Crear la conexión
$conn = new mysqli(
    $db_config['servername'], 
    $db_config['username'], 
    $db_config['password'], 
    $db_config['dbname']
);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
