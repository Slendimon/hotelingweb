<?php
      
      include("conexion.php");
      include("iniciar.php");

      $fecha_llegada = $_POST['fechalle'];
      $fecha_salida = $_POST['fechasa'];
  
  
      $nro_ocupantes = $_POST['nro_personas'];
  
      $f = explode('/', $fecha_llegada);
      $f2 = explode('/', $fecha_salida);
  
      $llegada = $f[2]."-".$f[0]."-".$f[1];
      $salida = $f2[2]."-".$f2[0]."-".$f2[1];

    $sql0 = "SELECT idhuespedes FROM huespedes ORDER BY idhuespedes DESC LIMIT 1";

    $result0 = mysqli_query($con,$sql0);
    $row0 = mysqli_fetch_array($result0,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result0);
    if ($count == 1) {
        $iduser = $row['idhuespedes']+'1';
    }else{
        $iduser = 1;
    }
    $sql3 = "INSERT INTO reserva (idhuespedes,fecha_inicio,fecha_salida,nro_ocupantes) 
    VALUES ('$iduser','$llegada','$salida','$nro_ocupantes')";

    $result2 = mysqli_query($con,$sql3);
?>