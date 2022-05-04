<?php include("conexion.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$f_nacimiento = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];
$profesion_id = $_POST["profesion_id"];

$sql = "INSERT INTO persona(nombre,apellidos,direccion,fecha_nacimiento,sexo,telefono,profesion_id) VALUES('$nombre','$apellido','$direccion','$f_nacimiento','$sexo',$telefono,$profesion_id)";
mysqli_query($con, $sql);
?>
<p>Se inserto con exito</p>
<meta http-equiv="refresh" content="2;url=listar.php">