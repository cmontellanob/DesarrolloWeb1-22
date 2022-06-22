    <?php
    if (isset($_FILES["archivo"])) {
        $fotografia = $_FILES["archivo"]["tmp_name"];
        copy($fotografia,'images/'.$_FILES["archivo"]["name"]);
        echo "Archivo subido con exito";
            }
    ?>
