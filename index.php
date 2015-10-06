<?php
	include_once('assets/php/chmday.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>ChangeMaker Day | Inicio</title>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/dimmer.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/shape.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/chmday.css">
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/main.css">
		<!-- Icono de la pagina -->
		<link rel="shorcut icon" href="<?php echo ChangeMaker::$domain; ?>assets/img/icon.ico">
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/main.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/dimmer.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/shape.min.js"></script>
	</head>
	<body>

		<?php
			ChangeMaker::menubar(true);
		?>
		
		<!-- Main -->
		<div id="main">
			<ul id="scene">
				<li id="slogan" class="layer" data-depth="0.10"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/slogan.png"></li>
			  	<li id="part1" class="layer" data-depth="0.50"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte1.png"></li>
			  	<li id="part2" class="layer" data-depth="0.30"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte2.png"></li>
			  	<li id="part3" class="layer" data-depth="0.70"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte3.png"></li>
			  	<li id="part4" class="layer" data-depth="0.80"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte4.png"></li>
			  	<li id="part5" class="layer" data-depth="0.99"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte5.png"></li>
			  	<li id="logo" class="layer" data-depth="0.10"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/logo.png"></li>
			  	<li id="name" class="layer" data-depth="0.00"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/name.png"></li>
			  </ul>
		</div>

		<div id="video">
			<div id="video_container" class="embed-responsive embed-responsive-16by9">
				<iframe width="560" height="315" src="http://www.youtube.com/embed/5-E53R6xGpk?" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<div id="about">
			<div id="about-info" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<img src="<?php echo ChangeMaker::$domain; ?>assets/img/que-es.svg"/>
				<p>Es la celebración de la innovación y el emprendimiento social, en la que la comunidad del 
				campus tiene la oportunidad de acercarse a las problemáticas sociales, compartir puntos de vista y 
				descubrir nuevas herramientas para la transformación.
				Es un espacio de encuentro y diálogo cuyo objetivo es fortalecer el ecosistema de líderes con 
				espíritu emprendedor y sentido humano, es decir, agentes de cambio.</p>
				<img id="ashoka-logo" src="<?php echo ChangeMaker::$domain; ?>assets/img/ashoka-campus.svg"/>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<img id="about-dots"src="<?php echo ChangeMaker::$domain; ?>assets/img/about.svg"/>
			</div>	
		</div>
		
		<!--<div id="inter-1">
		</div>-->

		<div id="speakers">
			<img id="speakers-dots" src="<?php echo ChangeMaker::$domain; ?>assets/img/speakers-dots.svg"/>
			<img id="speakers-prox" src="<?php echo ChangeMaker::$domain; ?>assets/img/speakers-prox.png">
		</div>

		<!--<div id="inter-2">
		</div>-->

		<div id="sponsors">
			<img id="sponsors-chmday" src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors.svg"/>
			<div id="sponsors-logos">
				<div class="row">
					<h1>Organizadores</h1>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/tec-azul.svg"/></div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ashoka-campus.svg"/></div>
				</div>
				<div class="row">
					<h1>Produce</h1>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/central.png"/></div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
				</div>
				<div class="row">
					<h1>Patrocinadores</h1>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/aceite-botella.png"/></div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/aceite.svg"/></div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ieegl.svg"/></div>
					-<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/dadial.png"/></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/bonafont.png"/></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/nova.png"/></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4"></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/sarape.png"/></div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4"></div>
				</div>
				<div class="row">
					<h1>Colaboradores</h1>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/yoquiero.jpg"/></div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/reinserta.png"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/acm.svg"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/techo.png"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ficg.jpg"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/codmex.jpg"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/socialvalley.png"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/wiki.png"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/fuckup.jpg"/></div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/amnistia.png"/></div>
				</div>
			</div>
			<img id="sponsors-dots" src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors-dots.svg"/>
		</div>

		<!-- Script para que funcione parallax, no tocar :)-->
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/parallax.js"></script>
		<script type="text/javascript">
			var scene = document.getElementById('scene');
			var parallax = new Parallax(scene);
		</script>
	</body>
</html>