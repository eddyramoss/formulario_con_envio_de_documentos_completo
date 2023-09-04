<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Website with a contact Form 01</title>
	<link rel="stylesheet" href="style.css">
	<!-- GOOGLE FONTs -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- ANIMATE CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>

	<div class="content">

		<h1 class="logo">Contáctanos <span>Us</span></h1>

		<div class="contact-wrapper animated bounceInUp">
			<div class="contact-form">
				<h3>Llena tus datos completos</h3>
				<form action="enviar.php" enctype="multipart/form-data" method="POST" id="denuncia-form">
					<p>
						<label>Nombre Completo</label>
						<input type="text" name="nombre" id="nombre">
					</p>
					<p>
						<label>Correo electronico</label>
						<input type="email" name="email" id="email">
					</p>
					<p>
						<label>Numero de telefono</label>
						<input type="celular" name="celular" id="celular">
					</p>

					<p class="block">
						<label>Mensaje</label>
						<textarea name="mensaje" id="mensaje" rows="3"></textarea>
					</p>

					<p class="block">
						<label>Adjuntar Documento</label>
						<input type="file" name="archivo" id="archivo">
					</p>

					<p class="block">
						<button>
							Enviar
						</button>
					</p>
				</form>
			</div>
			<div class="contact-info">
				<h4>More Info</h4>
				<ul>
					<li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
					<li><i class="fas fa-phone"></i> (111) 111 111 111</li>
					<li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
				</ul>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus
					repellendus?</p>
				<p>Company.com</p>
			</div>
		</div>

	</div>

	<script src="app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>