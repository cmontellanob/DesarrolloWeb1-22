<?php 
function factorial($numero)
{
    $factorial=1;
    for ($i=1; $i <= $numero; $i++) { 
        $factorial=$factorial*$i;
    }
    return $factorial;
}

echo factorial(5)."<br>";
echo factorial(10)."<br>";
echo factorial(3)."<br>";


?>