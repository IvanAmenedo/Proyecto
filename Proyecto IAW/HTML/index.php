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
	</nav>

	<section id="links">
			<a href="../HTML/index.php">INICIO</a>
			<a href="../HTML/bicicletas.php">BICICLETAS</a>
			<a href="../HTML/ropa.php">ROPA</a>
			<a href="../HTML/componentes.php">COMPONENTES</a>
			<a href="../HTML/carrito.php">Mi Carrito</a>
			<a href="../HTML/clientes.php">CLIENTES</a>

	</section>
	<br></br>
	<section id="nosotros">
		<h1>Sobre Nosotros</h1>
		<p>¡Bienvenido a nuestra tienda de ciclismo, tu destino definitivo para todas tus necesidades 
			relacionadas con el mundo de las dos ruedas! En nuestro establecimiento, nos enorgullece
			 ofrecer una amplia gama de productos de alta calidad y servicios especializados para 
			 satisfacer las necesidades de ciclistas de todos los niveles y disciplinas.
		</p>
	</section>

	<section id="ofertas">
		<nav id="of_bici">
			<h2>Ofertas destacadas en bicicletas</h2>

		<nav>
		
		<h2>Ofertas destacadas en ropa</h2>
		<h2>Ofertas destacadas en componentes</h2>
	</section>

	<!-- Contenedor del Bot -->
<div id="bot-container">
    <button onclick="mostrarOpciones()">Pregúntame cómo puedo ayudarte</button>
    <div id="opciones" style="display: none;">
        <button onclick="mostrarContacto()">Contacto</button>
        <button onclick="mostrarAyuda()">Ayuda</button>
    </div>
</div>

<!-- Contenedor para mostrar las respuestas -->
<div id="respuestas"></div>

<!-- Formulario de Contacto -->
<div id="formulario" style="display: none;">
    <h2>Contacto</h2>
    <form onsubmit="enviarFormulario(); return false;">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
</div>

<!-- Scripts -->
<script>
    function mostrarOpciones() {
        var opciones = document.getElementById('opciones');
        opciones.style.display = 'block';
        var formulario = document.getElementById('formulario');
        formulario.style.display = 'none'; // Ocultar el formulario cuando se muestran las opciones.
    }

    function mostrarContacto() {
        var respuestas = document.getElementById('respuestas');
        respuestas.innerHTML = ""; // Limpiar respuestas anteriores
        var formulario = document.getElementById('formulario');
        formulario.style.display = 'block';
    }

    function mostrarAyuda() {
        var respuestas = document.getElementById('respuestas');
        respuestas.innerHTML = "Estamos aquí para ayudarte. ¿En qué podemos ayudarte?";
        var formulario = document.getElementById('formulario');
        formulario.style.display = 'none'; // Ocultar el formulario cuando se muestra la ayuda.
    }

    function enviarFormulario() {
        var respuestas = document.getElementById('respuestas');
        var email = document.getElementById('email').value;
        var mensaje = document.getElementById('mensaje').value;

        // Aquí puedes realizar acciones adicionales, como enviar el formulario a través de Ajax o almacenar los datos.

        respuestas.innerHTML = "¡Formulario enviado!<br>Correo electrónico: " + email + "<br>Mensaje: " + mensaje;
    }
</script>

</body>
	<br></br>
<footer>
		<p>(c) 2023 Ciclos Iván Amenedo-Todos los derechos reservados.</p>
<footer>

</html>
