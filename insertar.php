<?php
include ("Conexion.php");


$nombre=$_POST['nombre'];
$dirreccion=$_POST['direccion'];
$apellido=$_POST['apellido'];
$Correo=$_POST['correo'];
$telefono=$_POST['telefono'];

mysqli_query($conn, $sqlinsert);

$sqlinsert = "INSERT INTO cliente Values (0,'$nombre', '$direccion','$apellido','$correo','$telefono')";


header ( "location:./formes.html.php?insert=success")

?>
