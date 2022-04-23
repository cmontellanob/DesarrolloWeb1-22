<form action="sumarvector.php" method="POST">
<?php 
$n=$_GET['n'];
echo "A:<br>";
echo '<input type="hidden" name="n" value="'.$n.'">';
for ($i=0; $i < $n; $i++) { 
?>
  <input type="number" name="A<?php echo $i;?>">  
<?php
}
?>
<br>
B:<br>
<?php
for ($i=0; $i < $n; $i++) {
?>
  <input type="number" name="B<?php echo $i;?>">
<?php
}
?>
<br>
<input type="submit" value="Sumar">
</form>
