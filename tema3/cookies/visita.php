<?php 
    if (isset($_COOKIE["nro_visitas"])) {
        $nro_visitas = $_COOKIE["nro_visitas"];
        $nro_visitas++;
    } else {
        $nro_visitas = 1;
    } 
    setcookie("nro_visitas", $nro_visitas, time()+3600);
    echo "Número de visitas: $nro_visitas";
 ?>   