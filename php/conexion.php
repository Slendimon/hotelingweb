<?php
    $servidor = "localhost";
    $user_db= "root";
    $contraseña_db= "";
    $db_nombre = "terrazas_hostal";
    
    //$pass1 = base64_encode('$pass0');

    $con= new mysqli($servidor, $user_db, $contraseña_db, $db_nombre);
    if($con->connect_error)
        {
        die("La conexion fallo: " . $con->connect_error);
        exit();
        }

    function desconectar(){
        global $con;
            mysqli_close($con);
    } 
?>