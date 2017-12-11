
<?php

include("conexion.php");
$form_pass = $_POST['pass'];
$hash = base64_encode($form_pass);


$buscarUsuario = "SELECT * FROM usuarios WHERE corre_usuario = '$_POST[mail]' ";
$result = $conexion->query($buscarUsuario);
$count = mysqli_num_rows($result);
if($count==1){
	echo "El email ya esta en uso";
}
else{
	$query= "INSERT INTO usuarios (iduser,nombre_usuario,password_usuario,corre_usuario) VALUES ('2','$_POST[realname]','$hash','$_POST[mail]')";
	if ($conexion->query($query) === TRUE) {
		header('Location: ../hotelingweb/php/usuarionuevo.php');
	}
	else{
		echo $query;
	}
}

desconectar();

?>