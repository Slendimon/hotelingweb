<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="reservas.css">
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
	<div class="reserva">
		<form method="post" action="guardado">
			<h2>RESERVAS</h2><br><br>
			<label>NOMBRE:</label>
			<input class="reservas_campo" type="text" id="nombre" name="nombre">
			<label>E-MAIL:</label>
			<input class="reservas_campo" type="text" id="email" name="email">
			<label>TELEFONO:</label>	
			<input class="reservas_campo" type="text" id="telefono" name="telefono">
			<label>PROCEDENCIA:</label>
			<input class="reservas_campo" type="text" id="procedencia" name="procedencia">
			<label>TIPO DE HABITACION:</label>
			<select class="reservas_campo" name="seleccion_habitacion">
				<option value="Habitacion Simple">Habitacion Simple</option>
				<option value="Habitacion Doble">Habitacion Doble</option>
				<option value="Habitacion Triple">Habitacion Triple</option>
				<option value="Habitacion Cuadruple">Habitacion Cuadruple</option>
				<option value="Habitacion Matrimonial">Habitacion Matrimonial</option>
			</select>	
			<label>DIA DE LLEGADA:</label>
			<input class="reservas_campo" type="date" name="fecha" step="1" min="2017-10-01" max="2018-12-31" value="2017-10-01">
			<label>CANTIDAD DE PERSONAS:</label>
			<select class="reservas_campo">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="mas de 6">Mas de 6</option>
			</select>
			<label>DIA DE SALIDA:</label>
			<input class="reservas_campo" type="date" name="fecha" step="1" min="2017-10-01" max="2018-12-31" value="2017-10-01">
			<br><input class="reservar_boton" type="submit" value="RESERVAR">
		</form>
	</div>
</body>
</html>