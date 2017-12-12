
<?php

include("conexion.php");
$query= "INSERT INTO correos (nombre,correo,asunto,consulta) VALUES ('$_POST[pnombre]','$_POST[correo]','$_POST[asunto]','$_POST[consulta]')";
if ($con->query($query) === TRUE) {
        header('Location: ../');
        echo '<script>alert ("Se registro con exito");</script>';
	}
	else{
		echo '<script>alert ("No se pudo registrar");</script>';
	}


desconectar();

?>