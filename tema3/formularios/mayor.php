<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Condicional mayor</h3>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    if ($a>$b) {
        echo "$a es mayor que $b";
    } else
    {
        echo "$b es mayor que $a";
    }
    ?>
</body>
</html>