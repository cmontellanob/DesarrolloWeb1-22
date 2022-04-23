<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .cuadro {
      width: 20px;
      height: 20px;
      background-color: #ccc;
      padding: 2px;
      float: left;
      border-radius: 10px;
      border: 1px solid #000;
    }
  </style>
</head>

<body>

</body>

</html>
<?php
$n = $_POST['n'];
for ($i = 0; $i < $n; $i++) {
  $A[$i] = $_POST['A' . $i];
  $B[$i] = $_POST['B' . $i];
?>

  <div class="cuadro">
    <?php echo $A[$i] + $B[$i]; ?>
  </div>
<?php
}
?>