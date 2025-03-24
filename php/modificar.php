<?php  /*modificar.php*/?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Modificar</title>
   <link rel="stylesheet"  type="text/css"  href="css/estilo.css"  media="screen">
</head>

<body>
<?php
include("abre.php");
$id = $_REQUEST['id'];

$consulta = "SELECT * FROM minishop WHERE id = '$id'";

$resultado = $conexion->query($consulta);
$a=1;
$row = $resultado->fetch_assoc();
?>

<center>
    <h1>Actualizar datos</h1>
    <form action="actualizar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data"><br><br>

        
        <input type ="text" name="nombre" placeholder="Nombre..."     value="<?php echo $row['nombre']; ?>"/><br><br>
        <input type ="text" name="descr" placeholder="Descripcion..." value="<?php echo $row['descr']; ?>"/><br><br>
        <input type ="text" name="color" placeholder="Color"          value="<?php echo $row['color']; ?>"/><br><br>
        <input type ="text" name="precio" placeholder="Precio"        value="<?php echo $row['precio']; ?>"/><br><br>
        <input type ="text" name="mater" placeholder="Material"       value="<?php echo $row['mater']; ?>"/><br><br>
        <input type ="text" name="dimen" placeholder="Dimensiones"    value="<?php echo $row['dimen']; ?>"/><br><br>
        <input type ="text" name="fabric" placeholder="Fabricante"    value="<?php echo $row['fabric']; ?>"/><br><br>

        <td><img height="50px" src="data:image/jpeg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>
        <input type="file" name="Imagen"/>
        <input type="submit" value="Aceptar"/>
</form>
</center>
</body>
</html>