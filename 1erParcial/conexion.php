<?php
$con = new mysqli("localhost","root","","bd_banco");
if($con->connect_error)
{
    die("Conexion fallida ".$con->connect_error);
}
?>