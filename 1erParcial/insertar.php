<?php
include("listaalimentos.php");
session_start();
if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = new ListaAlimentos();
}
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$alimento = new Alimentos($nombre, $tipo, $cantidad);
$_SESSION['lista']->Insertaralimento($alimento);
?>
Se inserto con éxito
<meta http-equiv="refresh" content="3; url=pregunta3.php">
