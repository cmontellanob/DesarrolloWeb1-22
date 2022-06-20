<?php include('operaciones.php');  
$n=$_GET['numero'];
$operaciones = new Operaciones();
$resultado = $operaciones->factorial($n);
echo $resultado;
?>