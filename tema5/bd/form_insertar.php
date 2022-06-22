<?php include('verificar.php'); 
include('permiso.php'); ?>

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
    $sql="SELECT id,profesion FROM profesion";
    $resultado=mysqli_query($con,$sql);

    ?>
    <form action="insertar.php" method="post" enctype="multipart/form-data">
        <label for="fotografia">Fotogtafia</label>
        <input type="file" name="fotografia" >
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion">
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento">
        <br>
        <input type="radio" name="sexo" value="M">Masculino
        <input type="radio" name="sexo" value="F">Femenino
        <br>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono">
        <br> 
        <label for="profesion">Profesion</label>
        <select name="profesion_id">
            <?php while($fila=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['profesion']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>