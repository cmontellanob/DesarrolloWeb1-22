
<?php
include("conexion.php");
$sql = "SELECT imagen,titulo from libros ";

if (isset($_GET["buscar"])) {
    $buscar = $_GET["buscar"];
    $sql .= "WHERE titulo LIKE '%$buscar%' ";
}

$consulta = mysqli_query($con, $sql);
while ($fila = mysqli_fetch_array($consulta)) {
?>
    <div class="mostrarlibro">
        <img src="images/<?php echo $fila["imagen"]; ?>" alt="<?php echo $fila["titulo"]; ?>" class="img-libro">
        <div style="display:inline-block"><?php echo $fila["titulo"]; ?></div>
    </div>
<?php } ?>