<?php /*
	session_start();
	if(!isset($_SESSION['usuario'])){
		echo '
			<script>
				alert("Debe iniciar sesion");
				window.location = "index.php";
				</script>
		';
		session_destroy();
		die();
	}
*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>DriFIM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/3d48aee393.js"></script>

</head>
<body>
	<!--Codeado por Malena-->
	<header>
		<div class="header-content">

				<div class="logo">
					<img src="assets/img/DriFIM.png">
				</div>
	
				<div class="menu" id="show_menu">
					<nav class="Conteiner__navegacion">
						<ul>
							<li class="menu-selected"><a href="DriFIM.php" class="text-menu-selected"><i class="fas fa-home"></i> Inicio</a></li>
							<li><a href="cursos_FIM.php"><i class="fas fa-window-restore"></i> Cursos FIM</a></li>
							<li><a href="Bibliotecas.php"><i class="fas fa-book"></i> Bibliotecas</a></li>
							<li><a href="Centros_FIM.php"><i class="fas fa-window-restore"></i> Centros FIM</a></li>
						</ul>
					</nav>
				</div>
		</div>

		<div id="icon-menu">
			<i class="fas fa-bars"></i>
		</div>

	</header>

	<div class="container-all" id="move-content">

		<!--Codeado por Malena-->
	<div class="container-content">
		<article>
			<section>
				<h1 class="titulo-articulo">Comunicados</h1>
				<img src="assets/img/semanafim.png">
				<p>
					<b>DriFIM</b> es una página web creada por una estudiante de la facultad
					que tiene una gran cantidad de material gracias a la recopilación de material durante <i>6 meses</i>.<br> Un gusto.
				</p>
			</section>
		</article>
	
		<div class="container-aside">

			<aside>
				<img src="assets/img/pagina_tefim.png" alt="">
				<h2>Página TEFIM 2022<h2>
					<p>¿Necesitas información sobre trámites de la facultad?</p>
					<a target=_blank href="https://sites.google.com/uni.edu.pe/tefim/inicio"><button>Aquí</button></a>
			</aside>

			<aside>
				<img src="assets/img/drive_cefim.png" alt="">
				<h2>Planchitas CEFIM 2019<h2>
					<p>Panchitas de todos los cursos de la FIM, de Betty y Elvira</p>
					<a target=_blank href="https://drive.google.com/drive/folders/1pSozRpkC9r7saTmLDatNyPHhrl0QWksY?usp=sharing"><button>Aquí</button></a>
			</aside>

		</div>
	</div>

	<div class="container-footer">
		<footer>
			<div class="logo-footer">
				<img src="assets/img/logo.png" alt="">
			</div>

			<hr>

			<h4>
				Siempre parece imposible, hasta que se hace.<br>
				<small>SE PIDE DISCRECIÓN</small>
			</h4>
		</footer>
	</div>

</div>

	<script src="assets/js/scriptmenu.js"></script>

</body>