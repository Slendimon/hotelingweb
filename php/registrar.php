
<?php

include("conexion.php");
$form_pass = $_POST['pass'];
$hash = base64_encode($form_pass);


$buscarUsuario = "SELECT * FROM usuarios WHERE corre_usuario = '$_POST[mail]' ";
$result = $con->query($buscarUsuario);
$count = mysqli_num_rows($result);
if($count==1){
	echo "El email ya esta en uso";
}
else{
	$query= "INSERT INTO usuarios (nombre_usuario,password_usuario,corre_usuario) VALUES ('$_POST[realname]','$hash','$_POST[mail]')";
	if ($con->query($query) === TRUE) {
		echo '<script>alert ("Registrado con exito");</script>';
		header('Location: listausuarios.php');
	}
	else{
		echo '<script>alert ("no se pudo");</script>';
		sleep(5);
		header('Location: listausuarios.php');
		
	}
}

desconectar();

?>