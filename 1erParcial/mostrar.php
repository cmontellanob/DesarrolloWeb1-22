<?php 
include("listaalimentos.php");
session_start();
if (isset($_SESSION['lista'])) {
    $_SESSION['lista']->Mostrarlista();
}
?>
<meta http-equiv="refresh" content="3; url=pregunta3.php">