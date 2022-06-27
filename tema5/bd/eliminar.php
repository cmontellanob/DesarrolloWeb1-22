<?php include('verificar.php');  
include('permiso.php');
include('conexion.php'); 
$id=$_GET["id"];
$sql = "DELETE FROM persona WHERE id=$id";
$consulta=mysqli_query($con,$sql);
$con->close();

?>
<p>Se elimino con exito</p>
