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
		<!-- Pantallazo con parallax, no tocar :)-->
		<div id="main">
			<ul id="scene">
				<li class="layer" data-depth="0.10"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/slogan.png"></li>
			  	<li class="layer" data-depth="0.50"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte1.png"></li>
			  	<li class="layer" data-depth="0.30"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte2.png"></li>
			  	<li class="layer" data-depth="0.70"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte3.png"></li>
			  	<li class="layer" data-depth="0.80"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte4.png"></li>
			  	<li class="layer" data-depth="0.99"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/parte5.png"></li>
			  	<li class="layer" data-depth="0.10"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/logo.png"></li>
			  	<li class="layer" data-depth="0.00"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/parallax/name.png"></li>
			  </ul>
		</div>

		<div id="video">
			<div id="video_container" class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item"  width="1280" height="720" src="http://www.youtube.com/embed/KxFa_OfuJjU?&theme=light&showinfo=0&controls=0&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<div id="about">
			<div id="about-info" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<img src="<?php echo ChangeMaker::$domain; ?>assets/img/que-es.svg"/>
				<p>Es la fiesta de Innovación Social en el Campus. Un espacio donde los actores del campus se reconocen 
				como agentes de cambio. Los agentes de cambio se encuentran y fortalecen. La comunidad universitaria 
				tiene la oportunidad de acercarse a las problemáticas sociales, compartir puntos de vista y descubrir 
				herramientas para la trasformación social.</p>
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
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/tec-azul.svg"/></div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ashoka-campus.svg"/></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/zona-ei.svg"/></div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/acm.svg"/></div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
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