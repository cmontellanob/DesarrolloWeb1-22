<?php
if ($_SESSION['nivel'] == 0) {
    header("location:mensajepermisos.html");
    die("no tiene permisos");
}
?>