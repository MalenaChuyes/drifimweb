
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

			*/?>


<!DOCTYPE html>
<html>
<head>
	<title>DriFIM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link rel="icon" href="img/logo.png">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link rel="stylesheet" href="assets/css/carreras.css">
	<link rel="stylesheet" href="assets/css/filtro.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/3d48aee393.js"></script>
	<title>Cursos de la facultad</title>
</head>
<body>
		<header>
		<div class="header-content">

				<div class="logo">
					<img src="assets/img/DriFIM.png">
				</div>

				<div class="menu"  id="show_menu">
					<nav class="Conteiner__navegacion">
						<ul>
							<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
							<li class="menu-selected"><a href="cursos_FIM.php"  class="text-menu-selected"><i class="fas fa-window-restore"></i> Cursos FIM</a></li>
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
		<div class="container-content">
			<article>
				<h1 class="title">Elije tu carrera</h1>

				<div class="container-box">

				<a href="#box1_M3"><div class="box box1" id="box1">
						<img src="assets/img/mecanica.png" alt="">
						<h2>Ingenieria Mecánica</h2>
						<div class="container-p">
							<p>Está enfocada al diseño, fabricación y montaje de máquinas y estructuras mecánicas diversas, así como al mantenimiento y reparación de máquinas de generación, transformación.</p>
						</div>
						<div class="check">
							<i class="fas fa-check"></i>
						</div>
					</div></a>
			
					<a href="#box2_M4"><div class="box box2" id="box2">
						<img src="assets/img/mecanicaelec.png" alt="">
						<h2>Ingeniería Mecánica Eléctrica</h2>
						<div class="container-p">
							<p>Se enfoca prioritariamente en centrar la función principal en el diseño de sistemas de generación, transmisión y distribución eléctrica y sistemas electromecánicos.</p>
						</div>
						<div class="check">
							<i class="fas fa-check"></i>
						</div>
					</div></a>
			
					<a href="#box3_M5"><div class="box box3" id="box3">
						<img src="assets/img/naval.svg" alt="">
						<h2>Ingeniería Naval</h2>
						<div class="container-p">
							<p>Brinda conocimientos muy sólidos en las diversas disciplinas, a fin de que el diseño, construcción, mantenimiento, operación y administración de todo tipo de naves así como estructuras marítimas y portuarias.</p>
						</div>
						<div class="check">
							<i class="fas fa-check"></i>
						</div>
					</div></a>

					<a href="#box4_M6"><div class="box box4" id="box4">
						<img src="assets/img/mecatronica.svg" alt="">
						<h2>Ingenieria Mecatrónica</h2>
						<div class="container-p">
							<p>La especialidad abarca la Mecánica, la Electrónica y la Informática,tanto para el diseño y la utilización de sistemas inteligentes como para la optimización.</p>
						</div>
						<div class="check">
							<i class="fas fa-check"></i>
						</div>
					</div></a>

				</div>

				<div class="flex-container" tabindex="0" id="box1_M3">

					<div class="container-post">
				
						<input type="radio" id="TODOS_M3" name="categories" value="TODOS_M3" checked>
						<input type="radio" id="CICLO_1_M3" name="categories" value="CICLO_1_M3">
						<input type="radio" id="CICLO_2_M3" name="categories" value="CICLO_2_M3">
						<input type="radio" id="CICLO_3_M3" name="categories" value="CICLO_3_M3">
						<input type="radio" id="CICLO_4_M3" name="categories" value="CICLO_4_M3">
						<input type="radio" id="CICLO_5_M3" name="categories" value="CICLO_5_M3">
						<input type="radio" id="CICLO_6_M3" name="categories" value="CICLO_6_M3">
						<input type="radio" id="CICLO_7_M3" name="categories" value="CICLO_7_M3">
						<input type="radio" id="CICLO_8_M3" name="categories" value="CICLO_8_M3">
						<input type="radio" id="CICLO_9_M3" name="categories" value="CICLO_9_M3">
						<input type="radio" id="CICLO_10_M3" name="categories" value="CICLO_10_M3">
						
						<h2>Ingeniería Mecánica</h2>
						<div class="container-category">
							<label for="CICLO_1_M3">CICLO 1</label>
							<label for="CICLO_2_M3">CICLO 2</label>
							<label for="CICLO_3_M3">CICLO 3</label>
							<label for="CICLO_4_M3">CICLO 4</label>
							<label for="CICLO_5_M3">CICLO 5</label>
							<label for="CICLO_6_M3">CICLO 6</label>
							<label for="CICLO_7_M3">CICLO 7</label>
							<label for="CICLO_8_M3">CICLO 8</label>
							<label for="CICLO_9_M3">CICLO 9</label>
							<label for="CICLO_10_M3">CICLO 10</label>
							<label for="TODOS_M3">TODOS</label>
						</div>
			
						<div class="posts">
			
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1I48aFzYCOR4RdmIkzPB4l_JL3FQ5L3aj?usp=sharing"><button>Etica y Filosofía Política</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TtZgbsfKIQsbRlUWXu54FX0IJntWQpbB?usp=sharing"><button>Física I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EOK_xF9TglBl7_cpcE_pcBIYmuEQRfaa?usp=sharing"><button>Cálculo Diferencial</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1DkKg88s2JCRIDQONjkGmrBg-BzFhFYCH?usp=sharing"><button>Química I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1j_5i9QRAH_sajLj-BO84OSUzrfkhmX9U?usp=sharing"><button>Redacción y Comunicación</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/147GQxIrBj8lSO5SEEba1Rty_Cd7DPIid?usp=sharing"><button>Introducción a la Ingeniería Mecánica</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1aoYWbdfHHNhctWRqzebqXoWUsfSuUQoS?usp=sharing"><button>Dibujo Técnico</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EZRtd7DQWr2NLwtPIGeFxQu45ZQ_P5i6?usp=sharing"><button>Geometría Descriptiva</button></a>
							</div>


							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1IQAthqPovacNHyFRX14i5rd_Vn2XNT-J?usp=sharing"><button>Economía General</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_Zm8zRTPuBqhZehoV4IjMeE-WBtyk6yJ?usp=sharing"><button>Introducción a la Computación</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fn6THIRIIvwaL3NskzFFa8MNHTAUQqQV?usp=sharing"><button>Cálculo Integral</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/11bRqftt9be01lzm8D4o9pnTqrMEngHPw?usp=sharing"><button>Álgebra Lineal</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1tLhFVAWHiYiXf-k-SSiT6l656URQRVTj?usp=sharing"><button>Física II</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_pnOXhuWkLxWIRfImvvrgAM-PFPjG152?usp=sharing"><button>Elementos de Máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fBgScvUj8XB8kFri0LB99hKQ6aP7_mFQ?usp=sharing"><button>Dibujo Mecánico I</button></a>
							</div>


							<div class="post" data-category="CICLO_3_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1gjsTKpk6dyhNRGWCa1EzmlzUb3ENdAc5?usp=sharing"><button>Calculo Vectorial</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zjO7qWf8CTFPxvrONvHJdSRP74-R4jH5?usp=sharing"><button>Fisica III</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Ie4WOmufP6vi8pR2lQR5kcOATvj5F5-A?usp=sharing"><button>Estadística y Probabilidades</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1uPsRocUbqYzZ9YravJgmdklF9-kqXx2-?usp=sharing"><button>Ciencia de los Materiales I</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1LkM7ykM4gMHlUlCBtyC1Gr-TpRM3fTML?usp=sharing"><button>Estática</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1QEBX8utcxDTsJX2zDjW2Qeq8vmqwG5s4?usp=sharing"><button>Dibujo Mecánico II</button></a>
							</div>


							<div class="post" data-category="CICLO_4_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1SLUZogAxUIAupi4LnwCjWwffTV83yTMM?usp=sharing"><button>Ecuaciones Diferenciales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hJskeB8UMBf9tVLsv01PepvqcnOgCwZn?usp=sharing"><button>Programación Orientada a Objetos</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EZRV6hvSS7zLkVyW7wlSfhktKxfNJqBm?usp=sharing"><button>Ciencia de los Materiales II</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1pelM23XSKNE6mZHz4AsT2GdXGqfWj0D_?usp=sharing"><button>Procesos de Manufactura I</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1rzxjf_RYmse0p1B2iPTP70Qf4lFf3s5H?usp=sharing"><button>Dinámica</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cca10mFxaioI9VbBj5BB_uAR4oq58E_a?usp=sharing"><button>Realidad nacional, Constitución y Derechos humanos</button></a>
							</div>


							<div class="post" data-category="CICLO_5_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1qMaVeKh82ywq0JFQcGy9Mvy9hy5ty4JO?usp=sharing"><button>Procesos de Manufactura II</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1-IgOeP7_A1tn8t57mlMDDvDCms4lpnv0?usp=sharing"><button>Resistencia de Materiales I</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1SM-04kXMIy1kth9QsOLUD_7C_HOD3EcT?usp=sharing"><button>Circuitos Electricos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1mLTy3-3iV7yWOrMv9M79Pmq4cl3pgJ9i?usp=sharing"><button>Termodinámica I</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1rdCgmFa3JDNZerE7gmoI1DLv9YBMd8JE?usp=sharing"><button>Mecánica de Fluidos I</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1x3I8zdXC5ON1Q0wc0F2OsgbOEI96QLxf?usp=sharing"><button>Desarrollo de Habilidades Sociales y Liderazgo</button></a>
							</div>


							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EFI89PlSvLdE7ChzeNRLWxppoL40TD8T?usp=sharing"><button>Metodos Numéricos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href=""><button>Resistencia de materiales II</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href=""><button>Mecánica de máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cU-UTbaFTYrMYXdfbQDJkMpUdeaMA8bX?usp=sharing"><button>Laboratorio de circuitos eléctricos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href=""><button>Termodinámica II</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href=""><button>Laboratorio de resistencia de materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href=""><button>Mecánica de fluidos II</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M3 TODOS_M3">
								<a target="_blank" href=""><button>Laboratorio de ingeniería mecánica I</button></a>
							</div>


							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1qoWDuFpfWNYFH5ZWXUmGrBTg3wmhH-1K?usp=sharing"><button>Cálculo por Elementos Finitos</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href=""><button>Cálculo por elementos de maquinas I</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hQoWVZ065FkKMTDgijvM4LwpAzqE_Kjk?usp=sharing"><button>Máquinas Eléctricas</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href=""><button>Electrónica</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1is0wqGMP8uGgA83x1LXzHeKckCnoqeJ_?usp=sharing"><button>Turbomáquinas I</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href=""><button>Laboratorio de ingeniería mecánica II</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1bupctmidjtS9FHZ6ymf4_UfjtlZM5wSC?usp=sharing"><button>Ingeniería económica y finanzas</button></a>
							</div>


							<div class="post" data-category="CICLO_8_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1iGter7XSAC-tzVyIBYRY2_q_FhdlYNg9?usp=sharing"><button>Cálculo de elementos de máquinas II</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1pxWiG3tHhGKMa1KX8rfTNiTdKk3mg080?usp=sharing"><button>Metodología de investigación</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ufZw-JCXWHMva4lNsjPxBG2q_RoOYwF9?usp=sharing"><button>Motores de combustión interna</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1-9pwsFVVgw7tZdWimbGeBinQeM4MQd2P?usp=sharing"><button>Transferencia de calor y masa</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1DLmzzIVfPvcxYmB5p9lv144LyASMCcZt?usp=sharing"><button>Laboratorio de ingeniería mecánica III</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TKaOFOfbMaQEOp04rYMJih6Rbmz5yuUC?usp=sharing"><button>Ingeniería de control</button></a>
							</div>



							<div class="post" data-category="CICLO_9_M3 TODOS_M3">
								<a target="_blank" href=""><button>Tecnología de la soldadura I</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Aj0PdQ466elOaN-O95mSxnRtlhvB79rx?usp=sharing"><button>Proyectos de ingeniería</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M3 TODOS_M3">
								<a target="_blank" href=""><button>Controles eléctricos y automatización</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1-BJ8tA3u7D9N4-aAy-h55m6A7KiwZF12?usp=sharing"><button>Refrigeración y aire acondicionado</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ckeF-Xa0X4okYWfjunkeHjN4Q6h-Zzxh?usp=sharing"><button>Gestión integral de la calidad</button></a>
							</div>


							<div class="post" data-category="CICLO_10_M3 TODOS_M3">
								<a target="_blank" href=""><button>Proyecto de máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M3 TODOS_M3">
								<a target="_blank" href="https://drive.google.com/drive/folders/14AkLvVah-5nv4LzalXMx-lCay4ZMdv_A?usp=sharing"><button>Ingenieria de mantenimiento</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M3 TODOS_M3">
								<a target="_blank" href=""><button>Fuerza motriz termica</button></a>
							</div>
			
						</div>
			
					</div>
        		</div>

				<div class="flex-container" tabindex="0" id="box2_M4">

					<div class="container-post">
				
						<input type="radio" id="TODOS_M4" name="categories" value="TODOS_M4" checked>
						<input type="radio" id="CICLO_1_M4" name="categories" value="CICLO_1_M4">
						<input type="radio" id="CICLO_2_M4" name="categories" value="CICLO_2_M4">
						<input type="radio" id="CICLO_3_M4" name="categories" value="CICLO_3_M4">
						<input type="radio" id="CICLO_4_M4" name="categories" value="CICLO_4_M4">
						<input type="radio" id="CICLO_5_M4" name="categories" value="CICLO_5_M4">
						<input type="radio" id="CICLO_6_M4" name="categories" value="CICLO_6_M4">
						<input type="radio" id="CICLO_7_M4" name="categories" value="CICLO_7_M4">
						<input type="radio" id="CICLO_8_M4" name="categories" value="CICLO_8_M4">
						<input type="radio" id="CICLO_9_M4" name="categories" value="CICLO_9_M4">
						<input type="radio" id="CICLO_10_M4" name="categories" value="CICLO_10_M4">
						
						<h2>Ingeniería Mecánica Eléctrica</h2>
						<div class="container-category">
							<label for="CICLO_1_M4">CICLO 1</label>
							<label for="CICLO_2_M4">CICLO 2</label>
							<label for="CICLO_3_M4">CICLO 3</label>
							<label for="CICLO_4_M4">CICLO 4</label>
							<label for="CICLO_5_M4">CICLO 5</label>
							<label for="CICLO_6_M4">CICLO 6</label>
							<label for="CICLO_7_M4">CICLO 7</label>
							<label for="CICLO_8_M4">CICLO 8</label>
							<label for="CICLO_9_M4">CICLO 9</label>
							<label for="CICLO_10_M4">CICLO 10</label>
							<label for="TODOS_M4">TODOS</label>
						</div>
			
						<div class="posts">
			
						<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1I48aFzYCOR4RdmIkzPB4l_JL3FQ5L3aj?usp=sharing"><button>Etica y filosofía política</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TtZgbsfKIQsbRlUWXu54FX0IJntWQpbB?usp=sharing"><button>Física I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EOK_xF9TglBl7_cpcE_pcBIYmuEQRfaa?usp=sharing"><button>Cálculo diferencial</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1DkKg88s2JCRIDQONjkGmrBg-BzFhFYCH?usp=sharing"><button>Química I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1j_5i9QRAH_sajLj-BO84OSUzrfkhmX9U?usp=sharing"><button>Redacción y comunicación</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/10efNtGin7N1O1PVFyE-Pz6XKQCjmVrzb?usp=sharing"><button>Introducción a la Ingeniería Mecánica Eléctrica</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1aoYWbdfHHNhctWRqzebqXoWUsfSuUQoS?usp=sharing"><button>Dibujo Técnico</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EZRtd7DQWr2NLwtPIGeFxQu45ZQ_P5i6?usp=sharing"><button>Geometría Descriptiva</button></a>
							</div>


							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1IQAthqPovacNHyFRX14i5rd_Vn2XNT-J?usp=sharing"><button>Economía General</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_Zm8zRTPuBqhZehoV4IjMeE-WBtyk6yJ?usp=sharing"><button>Introducción a la computación</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fn6THIRIIvwaL3NskzFFa8MNHTAUQqQV?usp=sharing"><button>Cálculo integral</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/11bRqftt9be01lzm8D4o9pnTqrMEngHPw?usp=sharing"><button>Álgebra lineal</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1tLhFVAWHiYiXf-k-SSiT6l656URQRVTj?usp=sharing"><button>Física II</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_pnOXhuWkLxWIRfImvvrgAM-PFPjG152?usp=sharing"><button>Elementos de máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fBgScvUj8XB8kFri0LB99hKQ6aP7_mFQ?usp=sharing"><button>Dibujo mecánico I</button></a>
							</div>


							<div class="post" data-category="CICLO_3_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1gjsTKpk6dyhNRGWCa1EzmlzUb3ENdAc5?usp=sharing"><button>Calculo vectorial</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zjO7qWf8CTFPxvrONvHJdSRP74-R4jH5?usp=sharing"><button>Fisica III</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Ie4WOmufP6vi8pR2lQR5kcOATvj5F5-A?usp=sharing"><button>Estadística y probabilidades</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Lzik7KMErjH4HJlhYRTvQzDV2oRpfa3j?usp=sharing"><button>Ciencia de los Materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1LkM7ykM4gMHlUlCBtyC1Gr-TpRM3fTML?usp=sharing"><button>Estática</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1QEBX8utcxDTsJX2zDjW2Qeq8vmqwG5s4?usp=sharing"><button>Dibujo Mecánico II</button></a>
							</div>


							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1SLUZogAxUIAupi4LnwCjWwffTV83yTMM?usp=sharing"><button>Ecuaciones Diferenciales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hJskeB8UMBf9tVLsv01PepvqcnOgCwZn?usp=sharing"><button>Programación Orientada a Objetos</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1rzxjf_RYmse0p1B2iPTP70Qf4lFf3s5H?usp=sharing"><button>Dinámica</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zmWMDNJQGn4QxZrO5y3zMAa9ApTiu3NC?usp=sharing"><button>Resistencia de Materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1YmGNZ2aaEJmdAwXXKMAkRMJLAQZqCVyo?usp=sharing"><button>Análisis de Circuitos Eléctricos I</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1x3I8zdXC5ON1Q0wc0F2OsgbOEI96QLxf?usp=sharing"><button>Desarrollo de Habilidades Sociales y Liderazgo</button></a>
							</div>


							<div class="post" data-category="CICLO_5_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cca10mFxaioI9VbBj5BB_uAR4oq58E_a?usp=sharing"><button>Realidad nacional, constitución y derechos humanos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EODR5pfpY5DK6UFOWf1ZArL4VSdH64j0?usp=sharing"><button>Procesos de Manufactura</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1NYrXgoDOsYEB8obeqTW1Xi8OX-8SI5e3?usp=sharing"><button>Análisis de Circuitos Eléctricos II</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M4 TODOS_M4">
								<a target="_blank" href=""><button>Laboratorio de circuitos eléctricos I</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1mLTy3-3iV7yWOrMv9M79Pmq4cl3pgJ9i?usp=sharing"><button>Termodinámica I</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1rdCgmFa3JDNZerE7gmoI1DLv9YBMd8JE?usp=sharing"><button>Mecánica de Fluidos I</button></a>
							</div>


							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EFI89PlSvLdE7ChzeNRLWxppoL40TD8T?usp=sharing"><button>Metodos Numéricos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1AJekuWSKD-VZB4nPB2FTbst_R5Msmbfx?usp=sharing"><button>Laboratorio de Circuitos Eléctricos II</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1BiPDH1dh21mirhT1RRWvdmNtmYhDU4XR?usp=sharing"><button>Máquinas Eléctricas Estáticas</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1AzLHsiZPTFNL9h5fZfUdYNYpKXHAOUCv?usp=sharing"><button>Instalaciones Eléctricas Interiores</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href=""><button>Electrónica industrial</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href=""><button>Termodinámica II</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href=""><button>Mecánica de fluidos II</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M4 TODOS_M4">
								<a target="_blank" href=""><button>Laboratorio de ingeniería mecánica I</button></a>
							</div>
							


							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1qoWDuFpfWNYFH5ZWXUmGrBTg3wmhH-1K?usp=sharing"><button>Cálculo por Elementos Finitos</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href=""><button>Laboratorio de máquinas eléctricas estáticas</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href=""><button>Máquinas eléctricas rotativas</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href=""><button>Medidas eléctricas</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/17wp1tms_qqiodd0pMG9EKEFm6BFchf1e?usp=sharing"><button>Electrónica de Potencia</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href=""><button>Turbomáquinas I</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TjMb3TCtMtfuP88_82rY0YUQTjQavjvh?usp=sharing"><button>Transferencia de Calor</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M4 TODOS_M4">
								<a target="_blank" href=""><button>Laboratorio de ingeniería mecánica II</button></a>
							</div>
							

							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href=""><button>Cálculo de elementos de máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1pxWiG3tHhGKMa1KX8rfTNiTdKk3mg080?usp=sharing"><button>Metodología de la Investigación</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href=""><button>Laboratorio de máquina eléctricas rotativas</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href=""><button>Instalaciones eléctricas industriales</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ufZw-JCXWHMva4lNsjPxBG2q_RoOYwF9?usp=sharing"><button>Motores de Combustión Interna</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1bupctmidjtS9FHZ6ymf4_UfjtlZM5wSC?usp=sharing"><button>Ingenieria Económica y de Finanzas</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TKaOFOfbMaQEOp04rYMJih6Rbmz5yuUC?usp=sharing"><button>Ingeniería de Control</button></a>
							</div>
							


							<div class="post" data-category="CICLO_9_M4 TODOS_M4">
								<a target="_blank" href=""><button>Proyectos de ingeniería</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/11HaoAHTaNfb_uCOJLC_sf1qnzr_cQ3F4?usp=sharing"><button>Sistemas de Potencia</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M4 TODOS_M4">
								<a target="_blank" href=""><button>Controles eléctricos y automatización</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M4 TODOS_M4">
								<a target="_blank" href=""><button>Centrales hidroeléctricas</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M4 TODOS_M4">
								<a target="_blank" href=""><button>Centrales termoeléctricas</button></a>
							</div>
							


							<div class="post" data-category="CICLO_10_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/15gGKJCR5l4kpjulM2Xhg0LpKUqdzxWIe?usp=sharing"><button>Líneas de Transmisión</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M4 TODOS_M4">
								<a target="_blank" href=""><button>Sistemas de protección eléctrica</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M4 TODOS_M4">
								<a target="_blank" href=""><button>Auditoría de sistemas electromecánicos</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ckeF-Xa0X4okYWfjunkeHjN4Q6h-Zzxh?usp=sharing"><button>Gestión Integral de Calidad</button></a>
							</div>
						
			
						</div>
			
					</div>
        		</div>

				<div class="flex-container" tabindex="0" id="box3_M5">

					<div class="container-post">
				
						<input type="radio" id="TODOS_M5" name="categories" value="TODOS_M5" checked>
						<input type="radio" id="CICLO_1_M5" name="categories" value="CICLO_1_M5">
						<input type="radio" id="CICLO_2_M5" name="categories" value="CICLO_2_M5">
						<input type="radio" id="CICLO_3_M5" name="categories" value="CICLO_3_M5">
						<input type="radio" id="CICLO_4_M5" name="categories" value="CICLO_4_M5">
						<input type="radio" id="CICLO_5_M5" name="categories" value="CICLO_5_M5">
						<input type="radio" id="CICLO_6_M5" name="categories" value="CICLO_6_M5">
						<input type="radio" id="CICLO_7_M5" name="categories" value="CICLO_7_M5">
						<input type="radio" id="CICLO_8_M5" name="categories" value="CICLO_8_M5">
						<input type="radio" id="CICLO_9_M5" name="categories" value="CICLO_9_M5">
						<input type="radio" id="CICLO_10_M5" name="categories" value="CICLO_10_M5">
						
						<h2>Ingeniería Naval</h2>
						<div class="container-category">
							<label for="CICLO_1_M5">CICLO 1</label>
							<label for="CICLO_2_M5">CICLO 2</label>
							<label for="CICLO_3_M5">CICLO 3</label>
							<label for="CICLO_4_M5">CICLO 4</label>
							<label for="CICLO_5_M5">CICLO 5</label>
							<label for="CICLO_6_M5">CICLO 6</label>
							<label for="CICLO_7_M5">CICLO 7</label>
							<label for="CICLO_8_M5">CICLO 8</label>
							<label for="CICLO_9_M5">CICLO 9</label>
							<label for="CICLO_10_M5">CICLO 10</label>
							<label for="TODOS_M5">TODOS</label>
						</div>
			
						<div class="posts">
			
						<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1I48aFzYCOR4RdmIkzPB4l_JL3FQ5L3aj?usp=sharing"><button>Etica y Filosofía Política</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TtZgbsfKIQsbRlUWXu54FX0IJntWQpbB?usp=sharing"><button>Física I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EOK_xF9TglBl7_cpcE_pcBIYmuEQRfaa?usp=sharing"><button>Cálculo Diferencial</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1DkKg88s2JCRIDQONjkGmrBg-BzFhFYCH?usp=sharing"><button>Química I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1j_5i9QRAH_sajLj-BO84OSUzrfkhmX9U?usp=sharing"><button>Redacción y Comunicación</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1VpDyvmDiPeIKccRBYQP7aLvumzbQcIvW?usp=sharing"><button>Introducción a la Ingeniería Naval</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1dUEDRCCwd27HxD9NWWMUllRNUL-YRStb?usp=sharing"><button>Dibujo Técnico - Geometría Descriptiva</button></a>
							</div>


							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_Zm8zRTPuBqhZehoV4IjMeE-WBtyk6yJ?usp=sharing"><button>Introducción a la Computación</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fn6THIRIIvwaL3NskzFFa8MNHTAUQqQV?usp=sharing"><button>Cálculo Integral</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/11bRqftt9be01lzm8D4o9pnTqrMEngHPw?usp=sharing"><button>Álgebra Lineal</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1tLhFVAWHiYiXf-k-SSiT6l656URQRVTj?usp=sharing"><button>Física II</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Lzik7KMErjH4HJlhYRTvQzDV2oRpfa3j?usp=sharing"><button>Ciencia de los Materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_pnOXhuWkLxWIRfImvvrgAM-PFPjG152?usp=sharing"><button>Elementos de Máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1R6nM1zJxQh_8dPGWjTkPM6BOpZFgAzfw?usp=sharing"><button>Dibujo Mecánico</button></a>
							</div>
							


							<div class="post" data-category="CICLO_3_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1gjsTKpk6dyhNRGWCa1EzmlzUb3ENdAc5?usp=sharing"><button>Calculo Vectorial</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zjO7qWf8CTFPxvrONvHJdSRP74-R4jH5?usp=sharing"><button>Fisica III</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hJskeB8UMBf9tVLsv01PepvqcnOgCwZn?usp=sharing"><button>Programación Orientada a Objetos</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1IQAthqPovacNHyFRX14i5rd_Vn2XNT-J?usp=sharing"><button>Economía General</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1LkM7ykM4gMHlUlCBtyC1Gr-TpRM3fTML?usp=sharing"><button>Estática</button></a>
							</div>
							


							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1SLUZogAxUIAupi4LnwCjWwffTV83yTMM?usp=sharing"><button>Ecuaciones Diferenciales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1rzxjf_RYmse0p1B2iPTP70Qf4lFf3s5H?usp=sharing"><button>Dinámica</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zmWMDNJQGn4QxZrO5y3zMAa9ApTiu3NC?usp=sharing"><button>Resistencia de materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
							<a target="_blank" href="https://drive.google.com/drive/folders/1Ie4WOmufP6vi8pR2lQR5kcOATvj5F5-A?usp=sharing"><button>Estadística y Probabilidades</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
							<a target="_blank" href="https://drive.google.com/drive/folders/1SM-04kXMIy1kth9QsOLUD_7C_HOD3EcT?usp=sharing"><button>Circuitos Eléctricos</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M4 TODOS_M4">
							<a target="_blank" href="https://drive.google.com/drive/folders/1GkbJgN52xwuE4KtSN0KfEcQu6a_bSI7L?usp=sharing"><button>Teoría del Buque I</button></a>
							</div>


							
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EODR5pfpY5DK6UFOWf1ZArL4VSdH64j0?usp=sharing"><button>Procesos de manufactura</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EFI89PlSvLdE7ChzeNRLWxppoL40TD8T?usp=sharing"><button>Metodos numéricos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cU-UTbaFTYrMYXdfbQDJkMpUdeaMA8bX?usp=sharing"><button>Laboratorio de Circuitos Eléctricos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hQoWVZ065FkKMTDgijvM4LwpAzqE_Kjk?usp=sharing"><button>Máquinas Eléctricas</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/14rpVOurib7AekJq99McsAV_cIAY41OaK?usp=sharing"><button>Mecánica de Fluidos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/19hyb1OSqBVQ1TYh519daLgXKoRpVOTyH?usp=sharing"><button>Estructuras Navales I</button></a>
							</div>
						

							<div class="post" data-category="CICLO_6_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cca10mFxaioI9VbBj5BB_uAR4oq58E_a?usp=sharing"><button>Realidad nacional, constitución y derechos humanos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1iGHTs1ND6aP0VW2Kogvca2TgsklCD1fj?usp=sharing"><button>Termodinámica</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1qoWDuFpfWNYFH5ZWXUmGrBTg3wmhH-1K?usp=sharing"><button>Cálculo por elementos finitos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1x3I8zdXC5ON1Q0wc0F2OsgbOEI96QLxf?usp=sharing"><button>Desarrollo de habilidades sociales y liderazgo</button></a>
							</div>


							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href=""><button>Tecnología de Soldadura I</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/10911gkQtylLIObPONspuKG1V9ii9kQdI?usp=sharing"><button>Vibraciones Mecánicas</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TjMb3TCtMtfuP88_82rY0YUQTjQavjvh?usp=sharings"><button>Transferencia de Calor</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href=""><button>Medio Ambiente y Sostenibilidad</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href=""><button>Sistema Eléctrico del Buque</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href=""><button>Motores Diésel Marinos</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M5 TODOS_M5">
								<a target="_blank" href=""><button>Resistencia al Avance Naval y Propulsión</button></a>
							</div>

							

							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1pxWiG3tHhGKMa1KX8rfTNiTdKk3mg080?usp=sharing"><button>Metodología de la investigación</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_8_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							


							<div class="post" data-category="CICLO_9_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_9_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_9_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_9_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_9_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							
							

							<div class="post" data-category="CICLO_10_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ckeF-Xa0X4okYWfjunkeHjN4Q6h-Zzxh?usp=sharing"><button>Gestión integral de calidad</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>
							<div class="post" data-category="CICLO_10_M5 TODOS_M5">
								<a target="_blank" href=""><button></button></a>
							</div>							
						
			
						</div>
			
					</div>
        		</div>
			
				<div class="flex-container" tabindex="0" id="box4_M6">

					<div class="container-post">
				
						<input type="radio" id="TODOS_M6" name="categories" value="TODOS_M6" checked>
						<input type="radio" id="CICLO_1_M6" name="categories" value="CICLO_1_M6">
						<input type="radio" id="CICLO_2_M6" name="categories" value="CICLO_2_M6">
						<input type="radio" id="CICLO_3_M6" name="categories" value="CICLO_3_M6">
						<input type="radio" id="CICLO_4_M6" name="categories" value="CICLO_4_M6">
						<input type="radio" id="CICLO_5_M6" name="categories" value="CICLO_5_M6">
						<input type="radio" id="CICLO_6_M6" name="categories" value="CICLO_6_M6">
						<input type="radio" id="CICLO_7_M6" name="categories" value="CICLO_7_M6">
						<input type="radio" id="CICLO_8_M6" name="categories" value="CICLO_8_M6">
						<input type="radio" id="CICLO_9_M6" name="categories" value="CICLO_9_M6">
						<input type="radio" id="CICLO_10_M6" name="categories" value="CICLO_10_M6">
						
						<h2>Ingeniería Mecatrónica</h2>
						<div class="container-category">
							<label for="CICLO_1_M6">CICLO 1</label>
							<label for="CICLO_2_M6">CICLO 2</label>
							<label for="CICLO_3_M6">CICLO 3</label>
							<label for="CICLO_4_M6">CICLO 4</label>
							<label for="CICLO_5_M6">CICLO 5</label>
							<label for="CICLO_6_M6">CICLO 6</label>
							<label for="CICLO_7_M6">CICLO 7</label>
							<label for="CICLO_8_M6">CICLO 8</label>
							<label for="CICLO_9_M6">CICLO 9</label>
							<label for="CICLO_10_M6">CICLO 10</label>
							<label for="TODOS_M6">TODOS</label>
						</div>
			
						<div class="posts">
			
						<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1I48aFzYCOR4RdmIkzPB4l_JL3FQ5L3aj?usp=sharing"><button>Etica y Filosofía Política</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TtZgbsfKIQsbRlUWXu54FX0IJntWQpbB?usp=sharing"><button>Física I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EOK_xF9TglBl7_cpcE_pcBIYmuEQRfaa?usp=sharing"><button>Cálculo Diferencial</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1DkKg88s2JCRIDQONjkGmrBg-BzFhFYCH?usp=sharing"><button>Química I</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1j_5i9QRAH_sajLj-BO84OSUzrfkhmX9U?usp=sharing"><button>Redacción y Comunicación</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/12-gEQbb2myn77SMQm2iImXO4j5pFPuZm?usp=sharing"><button>Introducción a la Ingeniería Mecatrónica</button></a>
							</div>
							<div class="post" data-category="CICLO_1_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1dUEDRCCwd27HxD9NWWMUllRNUL-YRStb?usp=sharing"><button>Dibujo Técnico - Geometría Descriptiva</button></a>
							</div>


							<div class="post" data-category="CICLO_2_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_Zm8zRTPuBqhZehoV4IjMeE-WBtyk6yJ?usp=sharing"><button>Introducción a la Computación</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fn6THIRIIvwaL3NskzFFa8MNHTAUQqQV?usp=sharing"><button>Cálculo Integral</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/11bRqftt9be01lzm8D4o9pnTqrMEngHPw?usp=sharing"><button>Álgebra Lineal</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1tLhFVAWHiYiXf-k-SSiT6l656URQRVTj?usp=sharing"><button>Física II</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1R6nM1zJxQh_8dPGWjTkPM6BOpZFgAzfw?usp=sharing"><button>Dibujo Mecánico</button></a>
							</div>
							<div class="post" data-category="CICLO_2_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1IQAthqPovacNHyFRX14i5rd_Vn2XNT-J?usp=sharing"><button>Economía General</button></a>
							</div>

							

							<div class="post" data-category="CICLO_3_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Lzik7KMErjH4HJlhYRTvQzDV2oRpfa3j?usp=sharing"><button>Ciencia de los Materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1gjsTKpk6dyhNRGWCa1EzmlzUb3ENdAc5?usp=sharing"><button>Calculo Vectorial</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zjO7qWf8CTFPxvrONvHJdSRP74-R4jH5?usp=sharing"><button>Fisica III</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hJskeB8UMBf9tVLsv01PepvqcnOgCwZn?usp=sharing"><button>Programación Orientada a Objetos</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1LkM7ykM4gMHlUlCBtyC1Gr-TpRM3fTML?usp=sharing"><button>Estática</button></a>
							</div>
							<div class="post" data-category="CICLO_3_M6 TODOS_M6">
							<a target="_blank" href="https://drive.google.com/drive/folders/1Ie4WOmufP6vi8pR2lQR5kcOATvj5F5-A?usp=sharing"><button>Estadística y Probabilidades</button></a>
							</div>
							
							


							<div class="post" data-category="CICLO_4_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_pnOXhuWkLxWIRfImvvrgAM-PFPjG152?usp=sharing"><button>Elementos de Máquinas</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1SLUZogAxUIAupi4LnwCjWwffTV83yTMM?usp=sharing"><button>Ecuaciones Diferenciales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1rzxjf_RYmse0p1B2iPTP70Qf4lFf3s5H?usp=sharing"><button>Dinámica</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1zmWMDNJQGn4QxZrO5y3zMAa9ApTiu3NC?usp=sharing"><button>Resistencia de materiales</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M6 TODOS_M6">
							<a target="_blank" href="https://drive.google.com/drive/folders/1SM-04kXMIy1kth9QsOLUD_7C_HOD3EcT?usp=sharing"><button>Circuitos Eléctricos</button></a>
							</div>
							<div class="post" data-category="CICLO_4_M6 TODOS_M6">
							<a target="_blank" href="https://drive.google.com/drive/folders/1iGHTs1ND6aP0VW2Kogvca2TgsklCD1fj?usp=sharing"><button>Termodinámica</button></a>
							</div>


							
							<div class="post" data-category="CICLO_5_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1Nfsxu5XDt6x9jLWLihzKaxVOYbl1GW9v?usp=sharing"><button>Variable Compleja y Anáisis de Fourier</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cU-UTbaFTYrMYXdfbQDJkMpUdeaMA8bX?usp=sharing"><button>Laboratorio de Circuitos Eléctricos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/1hQoWVZ065FkKMTDgijvM4LwpAzqE_Kjk?usp=sharing"><button>Máquinas Eléctricas</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1KMlAxd_eTAZeZAgSymNyRwRx2pv_xSQ6?usp=sharing"><button>Anáisis y Diseño de Circuitos Electrónicos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M5 TODOS_M5">
								<a target="_blank" href="https://drive.google.com/drive/folders/14rpVOurib7AekJq99McsAV_cIAY41OaK?usp=sharing"><button>Mecánica de Fluidos</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1x3I8zdXC5ON1Q0wc0F2OsgbOEI96QLxf?usp=sharing"><button>Desarrollo de habilidades sociales y liderazgo</button></a>
							</div>
							<div class="post" data-category="CICLO_5_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1X1p7pA2cNEiaqdnU3AxMLS69i2CX9BxC?usp=sharing"><button>Análisis y Diseño de Circuitos Digitales</button></a>
							</div>
							
						


							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EODR5pfpY5DK6UFOWf1ZArL4VSdH64j0?usp=sharing"><button>Procesos de manufactura</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1EFI89PlSvLdE7ChzeNRLWxppoL40TD8T?usp=sharing"><button>Metodos numéricos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TjMb3TCtMtfuP88_82rY0YUQTjQavjvh?usp=sharings"><button>Transferencia de Calor</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1cca10mFxaioI9VbBj5BB_uAR4oq58E_a?usp=sharing"><button>Realidad nacional, constitución y derechos humanos</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1vhoYv6u6JoP9XJYBsfcnwF5mtyptdI1c?usp=sharing"><button>Control Clásico</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1u6Kvu8MDE_EsntlXkZe6u1Oe6CrCNL2B?usp=sharing"><button>Sensores y Acondicionamiento de Señales</button></a>
							</div>
							<div class="post" data-category="CICLO_6_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1_aUMq08IgQM5J6KOC_Ej4_bPXZxXGsdV?usp=sharing"><button>Dinámica de sistemas multicuerpo</button></a>
							</div>
							


							
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/10911gkQtylLIObPONspuKG1V9ii9kQdI?usp=sharing"><button>Vibraciones Mecánicas</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/17wp1tms_qqiodd0pMG9EKEFm6BFchf1e?usp=sharing"><button>Electrónica de Potencia</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href=""><button>Laboratorio de Ingeniería Mecánica</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1xjvODDX6lo1kGrcDNrJjBLiXfnmX8hHD?usp=sharing"><button>Sistemas Embebidos</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ClYfkN1Rzj-Ace88KBvnncAwb-YTIc0Y?usp=sharing"><button>Control Moderno y Óptimo</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1fbVrHX6JitFX4VFdNXOFhkUeziyBuqYv?usp=sharing"><button>Sistemas Electrohidráulicos y Electroneumáticos</button></a>
							</div>
							<div class="post" data-category="CICLO_7_M6 TODOS_M6">
								<a target="_blank" href=""><button>Procesamiento Digital de Señales</button></a>
							</div>
							
							

							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1qoWDuFpfWNYFH5ZWXUmGrBTg3wmhH-1K?usp=sharing"><button>Cálculo por elementos finitos</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1pxWiG3tHhGKMa1KX8rfTNiTdKk3mg080?usp=sharing"><button>Metodología de la investigación</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1GM-immHhPHpEeUBjbTnqGDT8vrKINXG0?usp=sharing"><button>Diseño de Sistemas en Tiempo Real</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/16P5lh1mecvzdK4m6jLrI_yPkIt5nMTdO?usp=sharing"><button>Comunicación de Datos y Redes Industriales</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1FBmb6YfAnY0M3V-BbyVQC0uk2EEDA9tB?usp=sharing"><button>Procesadores Digitales de Señales</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1H6lj7TOTWyWXY4E48VTIGrXtKSqi6pNo?usp=sharing"><button>Análisis y Control de robots</button></a>
							</div>
							<div class="post" data-category="CICLO_8_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1nTGxO8B7A1q-tOvQLrvaoXSQNmTbfFgh?usp=sharing"><button>Sistema de manufactura reconfigurables</button></a>
							</div>
							


							<div class="post" data-category="CICLO_9_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1bupctmidjtS9FHZ6ymf4_UfjtlZM5wSC?usp=sharing"><button>Ingenieria Económica y Finanzas</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M6 TODOS_M6">
								<a target="_blank" href=""><button>Medio Ambiente y Sostenibilidad</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1nUOPsohCK79NT2mBlmDT3BUAHEjo-q67?usp=sharing"><button>Control Digital</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1AkmDp2SZSRActGmb2xYh8pGjaL9ZBE2x?usp=sharing"><button>Control de Procesos</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1yX9Fp9Dmdut9qbfm77qDvdIf_DThClz0?usp=sharing"><button>Inteligencia Artificial</button></a>
							</div>
							<div class="post" data-category="CICLO_9_M6 TODOS_M6">
								<a target="_blank" href=""><button>Diseño de Máquina Automáticas</button></a>
							</div>
							
							

							<div class="post" data-category="CICLO_10_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1ckeF-Xa0X4okYWfjunkeHjN4Q6h-Zzxh?usp=sharing"><button>Gestión integral de calidad</button></a>
							</div>
							<div class="post" data-category="CICLO_10_M6 TODOS_M6">
								<a target="_blank" href="https://drive.google.com/drive/folders/1TNAAO9n7xId-g-xOxDsO--GzqhGLK6q2?usp=sharing"><button>Proyecto Mecatrónico</button></a>
							</div>
						
			
						</div>
			
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
			</h4>
		</footer>
	</div>
	</div>

</body>
<script src="assets/js/script.js"></script>
		<script src="assets/js/scriptmenu.js"></script>
</html>