<?php
function fibonaci($n)
{
    $a=0;
    $b=1;
    $c=0;
    for ($i=1;$i<$n;$i++)
    {
        $c=$a+$b;
        $a=$b;
        $b=$c;
    }
    return $c;
}
$n=$_POST['n'];
echo fibonaci($n);
?>
