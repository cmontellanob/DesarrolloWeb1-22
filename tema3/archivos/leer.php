<?php
// header("Content-Type:text/html;charset=utf-8"); //enviar la cabecera para utilizar utf
$descriptor = fopen ("miarchivo.txt","a+");
$linea_numero = 1;
while (!feof($descriptor)) {
$linea = fgets ($descriptor,4096) ;
echo "línea número: $linea_numero es: $linea","<BR>";
$linea_numero++;
}
