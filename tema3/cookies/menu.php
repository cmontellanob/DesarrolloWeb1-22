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
        <?php setcookie("A", $_GET["A"], time()+3600);
              setcookie("B", $_GET["B"], time()+3600);
        ?>
        <div>valores:<?php echo "A=".$_GET["A"];
                            echo "B=".$_GET["B"];
                    ?></div>
        <li><a href="calcular.php?operacion=suma">Sumar</a></li>
        <li><a href="calcular.php?operacion=resta">Restar</a></li>
        <li><a href="calcular.php?operacion=multiplicacion">Multiplicar</a></li>
        <li><a href="calcular.php?operacion=division">Dividir</a></li>
    </ul>
    
</body>
</html>