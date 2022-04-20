<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <div>valores:
            <?php
            $A = $_GET["A"];
            $B = $_GET["B"];
            echo "A=" . $A;
            echo "B=" . $B;
            ?></div>
        <li>
            <form action="calcular.php" method="get">
                <input type="hidden" name="A" value="<?php echo $A ?>">
                <input type="hidden" name="B" value="<?php echo $B ?>">
                <input type="hidden" name="operacion" value="suma">
                <input type="submit" value="Sumar">
            </form>
        </li>
        <li>
            <form action="calcular.php" method="get">
                <input type="hidden" name="A" value="<?php echo $A ?>">
                <input type="hidden" name="B" value="<?php echo $B ?>">
                <input type="hidden" name="operacion" value="resta">
                <input type="submit" value="Restar">
            </form>
        </li>
        <li>
            <form action="calcular.php" method="get">
                <input type="hidden" name="A" value="<?php echo $A ?>">
                <input type="hidden" name="B" value="<?php echo $B ?>">
                <input type="hidden" name="operacion" value="multiplicacion">
                <input type="submit" value="Multiplicar">
            </form>
        </li>
        <li>
            <form action="calcular.php" method="get">
                <input type="hidden" name="A" value="<?php echo $A ?>">
                <input type="hidden" name="B" value="<?php echo $B ?>">
                <input type="hidden" name="operacion" value="division">
                <input type="submit" value="Dividir">
            </form>
        </li>
    </ul>

</body>

</html>