<?php include('verificar.php'); 
include('permiso.php');
include("conexion.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$f_nacimiento = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];
$profesion_id = $_POST["profesion_id"];


$sql = "INSERT INTO persona(nombre,apellidos,direccion,fecha_nacimiento,sexo,telefono,profesion_id) VALUES('$nombre','$apellido','$direccion','$f_nacimiento','$sexo',$telefono,$profesion_id)";
//echo $sql;
mysqli_query($con, $sql);
$fotografia=$_FILES['fotografia']['name'];
if ($fotografia!="") {
    
    $archivo=explode($_FILES['fotografia']['name'],".");
    $extension=end($archivo);
    echo $extension;
    $idultimo=mysqli_insert_id($con);
    $nuevonombre=$idultimo.'.'.$extension;
    copy($_FILES['fotografia']['tmp_name'],"images/".$nuevonombre);

    $sql = "UPDATE persona SET fotografia='$nuevonombre' where id=$idultimo";
    mysqli_query($con, $sql);





    
}
?>
<p>Se inserto con exito</p>
