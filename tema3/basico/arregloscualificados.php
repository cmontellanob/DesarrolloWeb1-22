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
    $persona=array("nombre"=>"Juan","apellido"=>"Perez","edad"=>23);
    $persona=[
        "nombre"=>"Juan",
        "apellido"=>"Perez",
        "edad"=>23
    ];
    foreach ($persona as $indice => $valor) {
        echo "$indice: $valor <br>";
    }
    ?>
</body>
</html>