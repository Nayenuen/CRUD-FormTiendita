<?php

include("abre.php"); 
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$nombre = $_POST['nombre'];
$descr = $_POST['descr'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$mater = $_POST['mater'];
$dimen = $_POST['dimen'];
$fabric = $_POST['fabric'];

$consulta = "INSERT INTO minishop (nombre, descr, color, precio, mater, dimen, fabric, Imagen) 
             VALUES ('$nombre', '$descr', '$color', '$precio', '$mater', '$dimen', '$fabric', '$Imagen')";

// Ejecuta la consulta
if ($conexion->query($consulta) === TRUE) {
    header("Location: ../mostrar.php");
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}

// Cierra la conexión
$conexion->close();
?>