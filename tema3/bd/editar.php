<?php include("conexion.php");
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$f_nacimiento = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];
$profesion_id = $_POST["profesion_id"];

$sql = "UPDATE persona SET nombre='$nombre',apellidos='$apellido',direccion='$direccion',
fecha_nacimiento='$f_nacimiento',sexo='$sexo',telefono='$telefono',profesion_id=$profesion_id WHERE id=$id";
echo $sql;
mysqli_query($con, $sql);
?>
<p>Se edito con exito</p>
<meta http-equiv="refresh" content="2;url=listar.php">