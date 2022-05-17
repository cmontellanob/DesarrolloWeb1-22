<?php include('verificar.php');
?>
Bienvenido: <?php echo $_SESSION['nombrecompleto']; ?>
<a href="cerrar.php">Cerrar Sesion</a>

<?php
include("conexion.php");
$sql = "SELECT PE.id,nombre,apellidos,direccion,fecha_nacimiento,sexo,telefono,PR.profesion,fotografia FROM persona PE LEFT JOIN profesion PR ON PE.profesion_id = PR.id ";

if (isset($_GET["buscar"])) {
    $buscar = $_GET["buscar"];
    $sql .= "WHERE nombre LIKE '%$buscar%' OR apellidos LIKE '%$buscar%' ";
}
if (isset($_GET["orden"])) {
    $orden = $_GET["orden"];
    $sql .= "ORDER BY $orden";
}

$consulta = mysqli_query($con, $sql);
?>
<form action="listar.php" method="GET">
    <label for="buscar">Buscar</label>
    <input type="text" name="buscar" value="<?php echo isset($_GET["buscar"]) ? $_GET["buscar"] : ''; ?>">
    <input type="submit" value="Buscar">
</form>
<br>


<table>
    <tr>
        <th>Fotografia </th>
        <th><a href="listar.php?orden=nombre">Nombre</a> </th>
        <th><a href="listar.php?orden=apellidos">Apellidos</a></th>
        <th><a href="listar.php?orden=direccion">Direccion</a></th>
        <th>Fecha de Nacimiento</th>
        <th>Sexo</th>
        <th>Telefono</th>
        <th><a href="listar.php?orden=profesion">Profesion</a></th>
        <th>Operaciones</th>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($consulta)) {
    ?>
        <tr>
            <td><?php if ($fila['fotografia'] != "") { ?>
                    <img width="100px" src="images\<?php echo $fila['fotografia']; ?>" alt="">
                <?php } ?>
            </td>

            <td><?php echo $fila["nombre"]; ?></td>
            <td><?php echo $fila["apellidos"]; ?></td>
            <td><?php echo $fila["direccion"]; ?></td>
            <td><?php echo $fila["sexo"]; ?></td>
            <td><?php echo $fila["telefono"]; ?></td>
            <td><?php echo $fila["profesion"]; ?></td>
            <td><?php if ($_SESSION['nivel'] == 1) { ?>
                    <a href="form_editar.php?id=<?php echo $fila['id'] ?>">Editar</a> <a href="eliminar.php?id=<?php echo $fila["id"] ?>">Elimnar</a>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
</table>
<?php if ($_SESSION['nivel'] == 1) { ?>
    <a href="form_insertar.php">Insertar</a>
<?php } ?>