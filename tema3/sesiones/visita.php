<?php  session_start();
    if (isset($_SESSION["nro_visitas"])) {
        $_SESSION["nro_visitas"]++;
        
    } else {
        $_SESSION["nro_visitas"]=1;
    } 
    
    echo "Número de visitas:". $_SESSION['nro_visitas'];
 ?>   