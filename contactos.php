<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="contactos.css">
	<title>Contactos</title>
</head>
<body>
	<div class="container">
		<center>
			<H1>Contactos
		</center>
		<div>
			<form>
				<table>
					<tr>
						<td align="center">
							<div id="nom_contacto" class="fa fa-user-circle" aria-hidden="true">  Nombres:</div>
						</td>
						<td>
							<input type="text" name="cmp_nombres" id="cmp_contacto">
						</td>
					</tr>
					<tr>
						<td align="center">
							<div id="nom_contacto" class="fa fa-mobile" aria-hidden="true">  Teléfono:</div>
						</td>
						<td>
							<div>
								<input type="text" name="cmp_telefono" id="cmp_contacto2">	
							</div>
						</td>
						<td>
							<div id="nom_contacto" class="fa fa-university" aria-hidden="true">  Ciudad:</div>
						</td>	
						<td>
							<div>
								<input type="text" name="cmp_ciudad" id="cmp_contacto3">
							</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<div id="nom_contacto" class="fa fa-envelope-o" aria-hidden="true">  Correo:</div>
						</td>
						<td>
							<input type="text" name="cmp_correo" id="cmp_contacto">
						</td>
					</tr>
					<tr>
						<td align="center">
							<div id="nom_contacto" class="fa fa-briefcase" aria-hidden="true">  Asunto:</div>
						</td>
						<td>
							<input type="text" name="cmp_asunto" id="cmp_contacto">
						</td>
					</tr>
					<tr>
						<td align="center">
							<div id="nom_contacto" class="fa fa-comment-o" aria-hidden="true">  Comentario:</div>
						</td>
						<td>
							<textarea name="cmp_comentario" id="cmp_comentario"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<br><input type="submit" name="submit" id="submit" class="submit">
							<input type="reset" name="reset" id="reset" class="reset">
						</td>
					</tr>
				</table>
			</form>
		</div>	
	</div>
</body>
</html>