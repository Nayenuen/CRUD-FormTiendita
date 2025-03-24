<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type"; charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mostrar</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
</head>
<!------------------------------------------------------------------------------------>
<header>
    <section id="espacio"></section>
    <section id="banner"><img src="img/b.jpg"/></section>

</header><br>

<!----------------------------------------------------------------------->

<body>
    <center>
        <tr><h3>Catalogo de productos</h3></tr><br><br>
    <table border = 0>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Material</th>
                <th>Dimension</th>
                <th>Fabricante</th>
                <th>Muestra</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ("php/abre.php");
            $consulta = "SELECT * FROM minishop";
            $resultado = $conexion->query($consulta);
            while ($row=$resultado->fetch_assoc()){
                ?>
        <tr>
            <td><?php  echo $row['id'];   ?></td> 
            <td><?php  echo $row['nombre'];   ?></td>    
            <td><?php  echo $row['descr'];   ?></td>    
            <td><?php  echo $row['color'];   ?></td>    
            <td><?php  echo $row['precio'];   ?></td>  
            <td><?php  echo $row['mater'];   ?></td>    
            <td><?php  echo $row['dimen'];   ?></td>    
            <td><?php  echo $row['fabric'];   ?></td>  
            
            <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>
            
            <!--Modificar------> 
            <th><a href="php/modificar.php?id=<?php echo $row['id']; ?>"><img height="35px" src="img/actualizar.png"></a></th>
             <!--Eliminar------> 
             <th><a href="php/eliminar.php?id=<?php echo $row['id']; ?>"><img height="30px" src="img/eliminar.png"></a></th>

            </tr>
            </tbody>
            <?php
            }
            ?>
            </table>
        <tr>
            <th colspan="11"><a href="php/agregar.php">Agregar Producto</th>
        </tr>
        
        </center>
</body><br><br>

<footer>
    <center>
        <p>Desarrolladores it / Contacto: desarrollajuarez@gmail.com</p>
        <p>Ciudad Juarez, Chih. Marzo - 2025</p>
        </center>
        </footer>

</html>