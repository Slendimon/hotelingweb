
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="../css/reservas.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
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
				<form action="" method="post">
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
            <div class="disponible">
                <form action="" id="reser1">
					
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="apellido" name="apellido">
                    <input type="email" placeholder="Correo electronico" name="correo">
                    <input type="" placeholder="Telefono" name="telefono">
                    <input type="text" placeholder="Procedencia" name="procedencia">
                    <input type="submit" value="Reservar" class="reservar_boton">
                </form>
            </div>
            
		</div>
		<div class="grid extra">

		</div>
		<div class="grid footer">

		</div>
		
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../js/reserva.js"></script>
</body>
</html>