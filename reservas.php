<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="reservas.css">
	<title>Reservas</title>
</head>
<body>
	<div class="container">
		<center><h1>RESERVAS</center>
		<div>
			<form id="frm_reservas_vc" name="frm_reservas_vc" method="post" action="reservar.php">
				<div id="cont_controles">
					<label>NOMBRE:</label><br>
					<input type="text" id="txt_nombre" name="txt_nombre">
					<br><label>E-MAIL:</label><br>
					<input type="text" id="txt_email" name="txt_email">
					<div id="fono_res">
						<label>TELEFONO:</label><br>	
						<input type="text" id="txt_telefono" name="txt_telefono">
					</div>
					<div id="proc_res">
						<label>PROCEDENCIA:</label>
						<input type="text" id="txt_procedencia" name="txt_procedencia">
					</div>
					<div id="fechas_lle_y_sal">
						<div id="tipo_hab"></div>
							<br><label>TIPO DE HABITACION:</label><br>
							<select name="sel_tipo_h">
								<option value="Habitacion Simple">Habitacion Simple</option>
								<option value="Habitacion Doble">Habitacion Doble</option>
								<option value="Habitacion Triple">Habitacion Triple</option>
								<option value="Habitacion Cuadruple">Habitacion Cuadruple</option>
								<option value="Habitacion Matrimonial">Habitacion Matrimonial</option>
							</select>		
						</div>
						<div class="fecha_c">
							<label>DIA DE LLEGADA:</label>
							<input type="text" id="fec_llegada" name="fec_llegada" class c_fechas.j>
						</div>
						<div id="tipo_hab">
							<label>CANTIDAD DE PERSONAS:</label>
							<select name="sel_cantidad_p">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="mas de 6">Mas de 6</option>
							</select>
						</div>
						<div class="fecha_c">
							<label>DIA DE SALIDA:</label>
							<input type="text" id="fec_salida" name="fec_salida" class="c_fechas_j">
						</div>
					</div>	
					<br>
					<label>DETALLE DE RESERVA:</label>
					<textarea id="txt_detalle" name="txt_detalle"></textarea>
					<input type="submit" value="RESERVAR">
				</div>
			</form>
		</div>
	</div>
</body>
</html>