<?php
    session_start();
    include("../php/conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $procedencia = $_POST['procedencia'];
    $tipo_habitacion = $_POST['seleccion_habitacion'];
    $fecha_llegada = $_POST['fechalle'];
    $nro_ocupantes = $_POST['nropersonas'];
    $fecha_salida = $_POST['fechasa'];

    $sql0 = "SELECT idhuespedes FROM huespedes ORDER BY idhuespedes DESC LIMIT 1";

    $result0 = mysqli_query($con,$sql0);
    $row0 = mysqli_fetch_array($result0,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result0);
    if ($count == 1) {
        $iduser = $row['idhuespedes'] + '1';
    }else{
        $iduser = 1;
    }


    $sql2 = "INSERT INTO huespedes (idhuespedes,nombre_cliente,apellido_cliente,
            correo_cliente,telefono_cliente,precedencia_cliente) VALUES ('$iduser',
            '$nombre','$apellido','$email','$telefono','$procedencia')";



    $sql3 = "INSERT INTO reserva (idhuespedes,fecha_inicio,fecha_salida,nro_ocupantes) 
            VALUES ('$iduser','$fecha_llegada','$fecha_salida','$nro_ocupantes')";
    

    $result1 = mysqli_query($con,$sql2);
    $result2 = mysqli_query($con,$sql3);
    if($result1 && $result2){
        echo json_encode(array('error' => false));
    }else{
        echo json_encode(array('error' => true));
    }
?>