<?php
	/*session_start();
	if(!isset($_SESSION['usuario'])){
		echo '
			<script>
				alert("Debe iniciar sesion");
				window.location = "index.php";
				</script>
		';
		session_destroy();
		die();
	}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>DriFIM</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/logo.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="assets/css/cartas.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/3d48aee393.js"></script>
	<title>Bibliotecas</title>
</head>
<body>
		<header>
		<div class="header-content">

				<div class="logo">
					<img src="assets/img/DriFIM.png">
				</div>

				<div class="menu" id="show_menu">
					<nav class="Conteiner__navegacion">
						<ul>
						<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
							<li><a href="cursos_FIM.php"><i class="fas fa-window-restore"></i> Cursos FIM</a></li>
							<li class="menu-selected"><a href="Bibliotecas.php"   class="text-menu-selected"><i class="fas fa-book"></i> Bibliotecas</a></li>
							<li><a href="Centros_Fim.php"><i class="fas fa-window-restore"></i> Centros FIM</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div id="icon-menu">
			<i class="fas fa-bars"></i>
		</div>

		</header>
		<div class="container-all" id="move-content">
		<div class="container-content">
			<article>
				<h1>Biblioteca de la UNI</h1>
				<p>La biblioteca de la UNI brinda sus bases de datos de diferentes páginas como IEEE, ASCE, etc.
					La universidad posee suscripción y es accesible para todo alumno, docente e investigador de la universidad.
				</p>
				<div class="card"  style="background-image: url(assets/img/Basesdedatos.PNG)" >
					<div class="card-content">
						<h2 class="card-title">Bases de Datos</h2>
						<p class="card-body">Biblioteca Central</p>
						<a target="_blank" href="https://www.bibliotecacentral.uni.edu.pe/base-datos.html" class="button"><b>Leer ahora</b></a>
					</div>
				</div>

				<div class="card" style="background-image: url(assets/img/Librosdigitales.PNG)">
					<div class="card-content">
						<h2 class="card-title">Libros Digitales</h2>
						<p class="card-body">Biblioteca Central</p>
						<a target="_blank" href="https://www.bibliotecacentral.uni.edu.pe/libro-digital.html" class="button"><b>Leer ahora</b></a>
					</div>
				</div>

				<div class="card" style="background-image: url(assets/img/Revistasdigitales.PNG)">
					<div class="card-content">
						<h2 class="card-title">Revistas Digitales</h2>
						<p class="card-body">Biblioteca Central</p>
						<a target="_blank" href="https://www.bibliotecacentral.uni.edu.pe/revista-digital.html" class="button"><b>Leer ahora</b></a>
					</div>
				</div>

				<div class="card" style="background-image: url(assets/img/Repositorio.PNG)">
					<div class="card-content">
						<h2 class="card-title">Repositorio UNI</h2>
						<p class="card-body">Biblioteca Central</p>
						<a target="_blank" href="https://repositorio.uni.edu.pe/" class="button"><b>Leer ahora</b></a>
					</div>
				</div>

			</article>
		</div>


		<div class="container-footer">
		<footer>
			<div class="logo-footer">
				<img src="assets/img/logo.png" alt="">
			</div>

			<hr>

			<h4>
				Siempre parece imposible, hasta que se hace.<br>
				<small>DRIFIM 2022</small>
			</h4>
		</footer>
		</div>

		</div>

		<script src="assets/js/scriptmenu.js"></script>

</body>