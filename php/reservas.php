<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="../css/reservas.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <script src="../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    
    <title>Hotel Terrazas</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="../index.html" id="logo"></a>
			</div> 
			<div class="reserp">
				<p>Reservas online </p>
			</div>
			<div class="navbar">
				<nav>			
					<a href="#" id="menu-icon"></a>
					<ul>
						<li><a href="../index.html#Servicios">SERVICIOS</a></li>
					
						<li><a href="../index.html#contacto">CONTACTO</a></li>
					
						<li><a href="../login/login.php">LOGIN</a></li>
					</ul>
				</nav>
			</div>

		</div>
		<div class="grid sidebar">
			<div class="disponible">
				<form action="" method="post" id="resebusca">
					<h2>Seleccione la disponibilidad</h2>
					<label>Fecha de llegada: </label>
					<input class="reservas_campo" type="date" name="fechalle" step="1" min="2017-10-01" 
								max="2018-12-31" value="2017-10-01">
					<label>Fecha de salida:</label>
					<input class="reservas_campo" type="date" name="fechasa" step="1" min="2017-10-01" 
								max="2018-12-31" value="2017-10-01">
				
					<input type="submit" class="btnbuscar-re" value="BUSCAR" name="buscarhab">
				</form>
			</div>
			
		</div>
		<div class="grid content">
			<div class="table ">
			<table>

			<?php
			if(isset($_POST['buscarhab'])){
				include_once("buscar_hab.php");
				if ($counthab > 0):
					if($counthab == 1):
						switch ($rowhab['nombre_tipohabitacion']):
							case 'simple':
								include_once("counthabsimple.php");
								break;
							case 'doble':
								include_once("counthabdoble.php");
								break;
							case 'triple':
								include_once("counthabtriple.php");
								break;
							case 'matrimonial':
								include_once("counthabmatri.php");
								break;
							default:
								echo"fuck off";
								break;
						endswitch;
					endif;
					if($counthab == 2):
						echo 'asdasd';
						if($rowhab['nombre_tipohabitacion'] == 'simple'):
							include_once("counthabsimple.php");
							if($rowhab['nombre_tipohabitacion'] =='doble'):
								include_once("counthabdoble.php");
							endif;
						endif;
					endif;
					if ($counthab == 3):
						echo '<th>'; include_once("counthabsimple.php"); echo '</th>';
						echo '<th>';include_once("counthabdoble.php");echo '</th>';
						echo '<th>';include("counthabtriple.php");echo '</th>';
					endif;
				else:
					echo '<h1>No hay habitaciones Libres</h1>';
				endif;

			}	
			?>
			</table>
			</div>
		</div>
		<div class="grid extra">

		</div>
		<div class="grid footer">

		</div>
	
		
	</div>
	
	
	<!--<div class="reserva">
		<form method="POST" action="" id="reser1">
			<h2>RESERVAS</h2><br><br>
			<label>NOMBRE:</label>
			<input class="reservas_campo" type="text" id="nombre" name="nombre">
			<label>APELLIDO:</label>
			<input class="reservas_campo" type="text" id="apellido" name="apellido">
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
			<input class="reservas_campo" type="date" name="fechalle" step="1" min="2017-10-01" max="2018-12-31" value="2017-10-01">
			<label>CANTIDAD DE PERSONAS:</label>
			<select class="reservas_campo" name="nropersonas">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">Mas de 6</option>
			</select>
			<label>DIA DE SALIDA:</label>
			<input class="reservas_campo" type="date" name="fechasa" step="1" min="2017-10-01" max="2018-12-31" value="2017-10-01">

			<br><input class="reservar_boton" type="submit" value="RESERVAR">
		</form>
	</div>-->
	<script src="../js/main.js"></script>
</body>
</html>