<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ivan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>

	<nav id="principio">
		<div id="logo"> 
			<img src="../Imagenes/logo.png" alt="logo" srcset="">
		</div>
		<div id="titulo"> 
   		 <h1>Ciclos Iván Amenedo<h1>
		</div>
		<div id="redes">
		<a href="https://www.youtube.com"><img src="../Imagenes/yt.png" alt="yt" srcset=""></a>
		<a href="https://www.instagram.com"><img src="../Imagenes/insta.jpg" alt="insta" srcset=""></a>
		</div>
	</a></nav>

	<section id="links">
			<a href="index.php">INICIO</a>
			<a href="../HTML/bicicletas.php">BICICLETAS</a>
			<a href="../HTML/ropa.php">ROPA</a>
			<a href="../HTML/componentes.php">COMPONENTES</a>
			<a href="../HTML/carrito.php">Mi Carrito</a>
			<a href="../HTML/clientes.php">CLIENTES</a>
</section>
    <br></br>
		<section id="clear">
		<h1><b><i>Área de clientes</b></i></h1>
		<legend><b>IDENTIFICARSE</b></legend>
		<section id="datosacceso">
				Correo electrónico
				<br>
				<input class="inputs" type="text" name="Correo electrónico" id="Correo_electrónico">
				<br>
				Contraseña
				<br>
				<input class="inputs" type="password" name="contraseña" minlength="8" id="clave_password">
				<br></br>
				<button class="inputs" type="submit"> ENTRAR</button>
		</section>
		<br></br>
		<hr id="lineapunteada">
		<br></br>
		<section id="conjuntocliente">
			<legend><b>REGISTRARSE COMO NUEVO CLIENTE</b></legend>
			<h3>Completa y envía el siguiente formulario para registrarse en nuestra web</h3>
			<section id="nuevocliente">
				Nombre
					<br>
					<input class="inputs" type="text" name="nombre:">
					<br>
				Apellidos
					<br>
					<input class="inputs" type="text" name="Apellidos:">
					<br>
				Correo Electrónico
					<br>
					<input class="inputs" type="text" name="correo_electronico:">
					<br>
				Teléfono
					<br>
					<input class="inputs"  type="number" name="telefono:">
					<br>
				Dirección Completa
					<br>
					<input class="inputs" type="text" name="dirección_completa:">
					<br>
				Código Postal
					<br>
					<input class="inputs" type="number" name="código_postal:">
					<br>
				Provincia
					<br>
					<select class="inputs" name="lista_de_seleccion">
						<option value="opcion1">A Coruña</option>
						<option value="opcion2">Lugo</option>
						<option value="opcion3">Orense</option>
						<option value="opcion4">Pontevedra</option>
					</select>
					<br>
				Cómo nos has conocido
				<br>
				 <div>
					<input type="radio" id="por recomendación amistad" name="Cómo nos has conocido" value="por recoomendación amistad">
					<label for="por recomendación amistad">por recomendación amistad</label>
				</div>
				<div>
					<input type="radio" id="redes sociales" name="Cómo nos has conocido" value="redes sociales">
					<label for="redes sociales">redes sociales</label>
				</div>
				<div>
					<input type="radio" id="prensa" name="Cómo nos has conocido" value="prensa">
					<label for="prensa">prensa</label>
				</div>
				</br>
				<hr>
				<br></br>
				<form>
					<input type="checkbox" id="Acepto_las_condiciones_de_privacidad_para_registrarme-en_esta_web" name="Acepto_las_condiciones_de_privacidad_para_registrarme-en_esta_web" value="Acepto_las_condiciones_de_privacidad_para_registrarme-en_esta_web">
					<label for="Acepto_las_condiciones_de_privacidad_para_registrarme-en_esta_web"> Acepto las condiciones de privacidad para registrarme en esta web</label><br>
				</form>
				<br><br>
				<button class="inputs" type="submit"> ENVIAR</button>		
			</section>
		</section>
	</body>
</body>
<br></br>
<footer>
		<p>(c) 2023 Ciclos Iván Amenedo-Todos los derechos reservados.</p>
<footer>
</html>
