<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tabla.php" method="get">
        <label for="numero">numero</label>
        <input type="number" name="numero" ><br>
        <label for="limite">limite</label>
        <input type="number" name="limite" ><br>
        <label for="alto">alto</label>
        <input type="number" name="alto" ><br>
        <label for="ancho">ancho</label>
        <input type="number" name="ancho" ><br>
        <label for="operacion">operacion</label>
        <select name="operacion" >
            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <input type="submit" value="calcular">
    </form>
    
</body>
</html>