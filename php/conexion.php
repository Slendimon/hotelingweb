<?php
    $servidor = "localhost";
    $user_db= "root";
    $db_nombre = "terrazas_hostal";
    //$pass1 = base64_encode('$pass0');

    $con = new mysqli($servidor,$user_db,"",$db_nombre);
    if ($con->connect_error){
        die ('No se pudo conectar a MySQL'. $con->connect_error);
    };
?>