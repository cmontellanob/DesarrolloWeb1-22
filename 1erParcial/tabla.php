<?php
$numero = $_GET["numero"];
$limite = $_GET["limite"];
$alto = $_GET["alto"];
$ancho = $_GET["ancho"];
$operacion = $_GET["operacion"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            width: <?php echo $ancho; ?>px;
            height: <?php echo $alto; ?>px;
            text-align: center;

        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 0; $i < $limite; $i++) {
            echo "<tr>";
            echo "<td>" . ($i+1) . "</td>";
            switch ($operacion) {
                case 'sumar':
                    echo "<td>+</td><td>" . ($numero) . "</td><td>=</td><td>" . ($i + 1 + $numero) . "</td>";
                    break;
                case 'restar':
                    echo "<td>+</td><td>" . ($numero) . "</td><td>=</td><td>" . ($i + 1 - $numero) . "</td>";
                    break;
                case 'multiplicar':
                    echo "<td>+</td><td>" . ($numero) . "</td><td>=</td><td>" . (($i + 1) * $numero) . "</td>";
                    break;
                case 'dividir':
                    echo "<td>+</td><td>" . ($numero) . "</td><td>=</td><td>" . (($i + 1) / $numero) . "</td>";
                    break;
                default:
                    break;
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>