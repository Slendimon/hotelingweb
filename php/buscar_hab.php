<?php
    session_start();
    include("conexion.php");

    
    $hayhab = "SELECT estado,nombre_tipohabitacion,COUNT(*) FROM habitacionlibre GROUP BY nombre_tipohabitacion ";
    $hayhabresult = $con ->query($hayhab);

    $rowhab = mysqli_fetch_array($hayhabresult,MYSQLI_ASSOC);
    $counthab = mysqli_num_rows($hayhabresult);
?>