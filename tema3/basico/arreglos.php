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
    echo "<h3>Arreglos</h3>";
    $dias=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");    
    $dias=[
        "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"
    ];
    echo "<h4>Ciclo for</h4>";
    for ($i=0; $i < count($dias); $i++) { 
        echo $dias[$i];
        echo "<br>";
    }   
    echo "<h4>Ciclo foreach</h4>";
    foreach ($dias as $dia) {
        echo $dia;
        echo "<br>";
    }
    echo "<h4>Ciclo foreach</h4>";
    foreach ($dias as $indice=>$dia) {
        echo $indice." ".$dia;
        echo "<br>";
    }

    asort($dias);
    foreach ($dias as $indice=>$dia) {
        echo $indice." ".$dia;
        echo "<br>";
    }

    ?>
</body>
</html>