<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="contactos.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <script src="../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>

    
    <title>Hotel Terrazas</title>
</head>
<body>
 
<header>
            <div class="header-inner">
                <a href="../index.html" id="logo"></a>
                <nav class="navbar">
                    <a href="#" id="menu-icon"></a>
                    <ul>
                        <li><a href="../index.html#Servicios">SERVICIOS</a></li>
                        <li><a href="../index.html#habitaciones">HABITACIONES</a></li>
                        <li><a href="contactos.php">CONTACTO</a></li>
                        <li class="reserva"><a href="reservas.php">RESERVAR</a></li>
                        <li><a href="login.html">LOGIN</a></li>
                    </ul>
                <div class="limpiar"></div>
                </nav>
            </div>   
        </header>
	<div class="contenedor">
		<form method="post" action="guardado2">
			<h3>CONTACTOS</h3><br>
			<div >NOMBRES:					
				<input class="contacto_campo" type="text" name="nombres" id="nombres">				
			</div>
			<div>TELEFONO:					
				<input class="contacto_campo" type="text" name="telefono" id="telefono">	
			</div>
			<div>CIUDAD:				
			<select class="contacto_campo" name="ciudad" value="Tacna">
				<option value="Amazonas">Amazonas</option>
				<option value="Ancash">Ancash</option>
				<option value="Apurimac">Apurimac</option>
				<option value="Arequipa">Arequipa</option>
				<option value="Ayacucho">Ayacucho</option>
				<option value="Cajamarca">Cajamarca</option>
				<option value="Callao">Callao</option>
				<option value="Cusco">Cusco</option>
				<option value="Huancavelica">Huancavelica</option>
				<option value="Huanuco">Huanuco</option>
				<option value="Ica">Ica</option>
				<option value="Junin">Junin</option>
				<option value="La Libertad">La Libertad</option>
				<option value="Lambayeque">Lambayeque</option>
				<option value="Lima">Lima</option>
				<option value="Loreto">Loreto</option>
				<option value="Madre De Dios">Madre De Dios</option>
				<option value="Moquegua">Moquegua</option>
				<option value="Pasco">Pasco</option>
				<option value="Piura">Piura</option>
				<option value="Puno">Puno</option>
				<option value="San Martin">San Martin</option>
				<option value="Tacna">Tacna</option>
				<option value="Tumbes">Tumbes</option>
				<option value="Ucayali">Ucayali</option>
			</select>		
			</div>
			<div>CORREO:
				<input class="contacto_campo" type="text" name="correo" id="correo">
			</div>
			<div>ASUNTO:					
				<input class="contacto_campo" type="text" name="asunto" id="asunto">
			</div>									
			<br><input type="reset" value="RESTABLECER" class="boton">
			<input type="submit" value="ENVIAR" class="boton">
		</form>
	</div>
</body>
</html>