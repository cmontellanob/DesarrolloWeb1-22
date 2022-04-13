<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $matriz = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );    
    $matriz=[
        [1,2,3],
        [4,5,6],
        [7,8,9]
        ];
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            echo $valor;
        }
        echo "<br>";
    }
 ?>       
</body>
</html>