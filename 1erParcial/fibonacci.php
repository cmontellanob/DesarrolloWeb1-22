<?php 
$n=$_GET['n'];
echo '<select  name="fibo" >';
$fib1=0;
$fib2=1;
$fibonaci=$fib1+$fib2;
echo '<option value="0" >0</option>';
for ($i=1; $i < $n; $i++) { 
    
    if ($i==$n-1)
    {
        echo '<option value="'.$i.'" selected>'.$fibonaci.'</option>';
    }
    else
    {
        echo '<option value="'.$i.'">'.$fibonaci.'</option>';
    }
    $fibonaci=$fib1+$fib2;
    
    $fib1=$fib2;
    $fib2=$fibonaci;
    
}
echo '</select>';
?>

