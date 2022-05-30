<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div id="contenido">
        <div id="cabeza">
            <div style="color:red;text-align: right;font-size: large;">UNIVERSIDAD DE SAN FRANCISCO XAVIER DE CHUQUISACA
            </div>
            <div style="color:rgb(116, 150, 197);text-align: right;font-size: large;">FACULTAD DE TECNOLOGIA</div>
            <div style="color:rgb(246, 165, 13);text-align: center;font-size: large;">Carrera Ing de Sistemas - Ing en
                Ciencias de la Computación</div>

        </div>
        <div id="cab1">
            <span style="color:red;padding-left: 10px;">Alumno:</span><span>Carlos Montellano</span>

        </div>
        <div id="cab2">
            <span style="color:red;padding-left: 10px;">CU:</span><span>35-239</span>

        </div>
        <div id="izq">
            &nbsp;
        </div>
        <div id="der">
            <ul class="menuvertical">
                <li><a href="inicial.php">Inicio</a></li>
                <li><a href="pregunta2.html">2</a></li>
                <li><a href="pregunta3.php">3</a></li>
                <li><a href="pregunta4.php">4</a></li>
                <li><a href="pregunta5.php">5</a></li>
            </ul>
        </div>
        <div id="pie">
            <div>Primer Examen Parcial </div>
            <div>Usted visito esta página: <span style="color: red;">
            <?php if (isset($_COOKIE['visitas'])) {
                echo $_COOKIE['visitas']." veces";
                setcookie('visitas', $_COOKIE['visitas']+1);
            } else {
                echo "1 vez";
                setcookie('visitas', 1);
            } ?>
            
         </span> </div>
        </div>

    </div>


</body>

</html>