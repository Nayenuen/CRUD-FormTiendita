<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Agregar</title>
    <link rel="stylesheet" type="text/css" href="css/estiloA.css" media="screen">
</head>

<body>
    <center>
        <h1>Registro de Piezas</h1>
        <form action = "guardar.php" method="POST" enctype="multipart/form-data"><br><br>

        <input type ="text" name="nombre" placeholder="Nombre..." value=""/><br><br>
        <input type ="text" name="descr" placeholder="Descripcion..." value=""/><br><br>
        <input type ="text" name="color" placeholder="Color" value=""/><br><br>
        <input type ="text" name="precio" placeholder="Precio" value=""/><br><br>
        <input type ="text" name="mater" placeholder="Material" value=""/><br><br>
        <input type ="text" name="dimen" placeholder="Dimensiones" value=""/><br><br>
        <input type ="text" name="fabric" placeholder="Fabricante" value=""/><br><br>
    
        <input type="file" name="Imagen"/>
        <input type= "submit" value="Aceptar"/>
        </form>
        </center>
</body>
</html>