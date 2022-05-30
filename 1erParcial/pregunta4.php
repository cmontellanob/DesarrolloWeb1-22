<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f2f2f2;
            
        }
        table
        {
            border-collapse: collapse;
            width: 200px;
            margin: 0 auto;
        }
        th
        {
            background-color: 0000FF ;
            color: white;

        }
        th a:link
        {
            text-decoration: none;
            background-color: #0000FF ;
            color: white;
        }
        th a:visited
        {
            text-decoration: none;
            background-color: #0000FF ;
            color: white;
        }
        th {
            border: 1px solid black;
            background-color: #0000FF ;
        }
        th {
            border: 1px solid black;

        }


    </style>
</head>
<body>
<?php
include("conexion.php");
if (isset($_GET["orden"]))
{
    $orden=$_GET["orden"];
}
else
{
    $orden="nombres";
}

$sql="SELECT nombres,apellidos,correo FROM usuarios ORDER BY $orden";
$consulta = mysqli_query($con, $sql);
?>
<table>
    <tr>
        <th><a href="pregunta4.php?orden=nombres">Nombres</a> </th>
        <th><a href="pregunta4.php?orden=apellidos">Apellidos</a> </th>
        <th><a href="pregunta4.php?orden=correo">Correo</a> </th>
    </tr>
    <?php
    $i=0;
    while ($fila = mysqli_fetch_array($consulta))
    {
        if ($i%2==0)
        {
            echo "<tr style='background-color:#8DB3E2 ;'>";
        }
        else
        {
            echo "<tr style='background-color: #BDE5F1 ;'>";
        }
        
        echo "<td>".$fila["nombres"]."</td>";
        echo "<td>".$fila["apellidos"]."</td>";
        echo "<td>".$fila["correo"]."</td>";
        echo "</tr>";
        $i++;
    }
    ?>
</table>

</body>
</html>