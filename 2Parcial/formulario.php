<?php
include("conexion.php");
$sql = "SELECT * FROM usuarios";
$usuarios = mysqli_query($con, $sql);

$sql = "SELECT * FROM carreras";
$carreras = mysqli_query($con, $sql);
$sql = "SELECT * FROM editoriales";
$editoriales = mysqli_query($con, $sql);
?>

<form action="javascript:insertar()" method="post" enctype="multipart/form-data">
    <div>
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen" onchange="previsualizar()">
        <img src="#" id="vistaprevia" width="300">
    </div>
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulolibro">
    </div>
    <div>
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor">
    </div>
    <div>
        <label for="editorial">Editorial</label>
        <select name="editorial" id="editorial">
            <?php
            while ($fila = mysqli_fetch_array($editoriales)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['editorial'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="anio">Año</label>
        <input type="number" name="anio" id="anio">
    </div>
    <div>
        <label for="usuario">Usuario</label>
        <select name="usuario" id="usuario">
            <?php
            while ($fila = mysqli_fetch_array($usuarios)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nombrecompleto'] . "</option>";
            }
            ?>
        </select>
    </div>

    <div>
        <label for="carrera">Carrera</label>
        <select name="carrera" id="carrera">
            <?php
            while ($fila = mysqli_fetch_array($carreras)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['carrera'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Registrar">

    </div>

</form>