<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('conexion.php'); 
    $id=$_GET["id"];
    $sql = "SELECT id,nombre,apellidos,direccion,fecha_nacimiento,sexo,telefono,profesion_id FROM persona WHERE id=$id";
    $consulta=mysqli_query($con,$sql);
    $fila=mysqli_fetch_array($consulta);
    $sql2="SELECT id,profesion FROM profesion";
    $resultado=mysqli_query($con,$sql2);

    ?>
    <form action="editar.php" method="post">
     <input type="hidden" name="id" value="<?php echo $fila['id']?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $fila['nombre']?>" >
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $fila['apellidos']?>">
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="<?php echo $fila['direccion']?>">
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento']?>">
        <br>
        <input type="radio" name="sexo" value="M" <?php echo $fila['sexo']=='M'?'checked':''?>>Masculino
        <input type="radio" name="sexo" value="F" <?php echo $fila['sexo']=='F'?'checked':''?>>Femenino
        <br>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" value="<?php echo $fila['telefono']?>">
        <br>   
        <label for="profesion">Profesion</label><?php echo trim($fila['profesion_id'])?>
        <select name="profesion_id">
            <?php while($fila2=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila2['id']; ?>" <?php echo $fila2['id']==$fila['profesion_id']?'selected':'' ?> ><?php echo $fila2['profesion']; ?></option>
            <?php } ?>
        </select>
        <br> 
        <input type="submit" value="actualizar">
    </form>
</body>
</html>