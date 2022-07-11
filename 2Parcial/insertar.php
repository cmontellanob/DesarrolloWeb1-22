<?php
include("conexion.php");

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$anio = $_POST["anio"];
$usuario = $_POST["usuario"];
$carrera = $_POST["carrera"];
$imagen = $_FILES['imagen']['name'];

if ($imagen != "") {
    $archivo = explode($_FILES['imagen']['name'], ".");
    $extension = end($archivo);
    $imagen = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], "images/" . $imagen);
}

$sql = "INSERT INTO iibros(imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera) 
VALUES('$imagen','$titulo','$autor','$editorial','$anio',$usuario,$carrera)";

mysqli_query($con, $sql);

?>
<p>Se inserto con exito</p>