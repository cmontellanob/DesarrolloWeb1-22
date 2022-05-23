<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="subirimagen.php" method="POST" enctype="multipart/form-data">
        Elige un archivo de imagen jpg: <input type="file" name="fichero">
        <input type="submit" name="Enviar" value="Enviar">
    </form>


    <?php
    if (isset($_FILES["fichero"])) {
        foreach ($_FILES["fichero"] as $indice => $valor) {
            echo $indice, $valor, '<br>';
        }
        echo "Imagen Original:<br>";
        $fotografia = $_FILES["fichero"]["tmp_name"];
        copy($fotografia, $_FILES["fichero"]["name"]);
        $foto_copia = $_FILES["fichero"]["name"] . "&modo=original";
        $url = "clase_imagen.php?fotografia=$foto_copia";
        echo "<img src='$url'>";
        echo "Imagen Miniatura:<br>";
        $foto_copia = $_FILES["fichero"]["name"] . "&modo=miniatura";
        $url = "clase_imagen.php?fotografia=$foto_copia";
        echo "<img src='$url'>";
    }
    ?>
</body>

</html>