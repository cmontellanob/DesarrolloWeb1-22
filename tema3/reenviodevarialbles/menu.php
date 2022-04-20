<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Operaciones</title>
</head>
<body>
    <ul>
       
        <div>valores:
            <?php 
            $A=$_GET["A"];
            $B=$_GET["B"];
            echo "A=".$A;
            echo "B=".$B;
                    ?></div>
        <li><a href="<?php echo "calcular.php?operacion=suma&A=$A&B=$B"?>">Sumar</a></li>
        <li><a href="<?php echo "calcular.php?operacion=resta&A=$A&B=$B"?>">Restar</a></li>
        <li><a href="<?php echo "calcular.php?operacion=multiplicacion&A=$A&B=$B"?>">Multiplicar</a></li>
        <li><a href="<?php echo "calcular.php?operacion=division&A=$A&B=$B"?>">Dividir</a></li>
    </ul>
    
</body>
</html>