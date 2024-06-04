<?php
include ("Conexion.php");


$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

// echo $nombre." ".$direccion." ".$apellido." ".$correo." ".$telefono;



$sqlinsert = "INSERT INTO cliente Values (0,'$nombre', '$direccion','$apellido','$correo','$telefono')";

mysqli_query($conn, $sqlinsert);

header ( "location:./index.php?insert=success")

?>
