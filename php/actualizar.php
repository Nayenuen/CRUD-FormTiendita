<?php
include("abre.php"); 
$id = $_REQUEST['id'];

// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$descr = $_POST['descr'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$mater = $_POST['mater'];
$dimen = $_POST['dimen'];
$fabric = $_POST['fabric'];

/* Se guardan los bits de la imagen */
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$consulta = "UPDATE minishop SET nombre = '$nombre', descr='$descr', color='$color', precio='$precio', mater='$mater', dimen='$dimen', fabric='$fabric', Imagen='$Imagen' WHERE id='$id'";
$resultado = $conexion->query($consulta);

if ($resultado) {
    header("Location: ../mostrar.php");
}else{
    echo "Error al actualizar el producto";
}

?>