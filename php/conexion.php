<?php
    $servidor = "localhost";
    $user_db= "root";
    $contraseña_db= "123456";
    $db_nombre = "terrazas_hostal";
    
    //$pass1 = base64_encode('$pass0');

    $conexion= new mysqli($servidor, $user_db, $contraseña_db, $db_nombre);
    if($conexion->connect_error)
        {
        die("La conexion fallo: " . $conexion->connect_error);
        exit();
        }

    function desconectar(){
        global $conexion;
            mysqli_close($conexion);
    } 
?>