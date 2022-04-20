<?php
$A=$_GET["A"];
$B=$_GET["B"];
$operacion=$_GET["operacion"];
switch ($operacion) {
    case 'suma':
        $resultado=$A+$B;
        break;
    case 'resta':
        $resultado=$A-$B;
        break;
    case 'multiplicacion':
        $resultado=$A*$B;
        break;
    case 'division':
        $resultado=$A/$B;
        break;
    default:
        $resultado="Operación no válida";
        break;
}
?>
El resultado es:<span style="color:red"><?php echo $resultado?>  </span>
