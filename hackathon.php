<?php
	include_once('assets/php/chmday.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>ChangeMaker Day | SocialHack</title>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/dimmer.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/shape.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/chmday.css">
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/hackathon.css">
		<!-- Icono de la pagina -->
		<link rel="shorcut icon" href="<?php echo ChangeMaker::$domain; ?>assets/img/icon.ico">
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/dimmer.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/shape.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/hackathon.js"></script>
	</head>
	<body>

	<?php
		ChangeMaker::menubar(false);
	?>
	
	<!-- Main -->
	<a href="http://goo.gl/forms/OkKxYzchfq" target="_blank"><img id="register" src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/registro.png"></a>
	<div id="hack">
		<ul id="scene">
		  	<li class="layer" data-depth="0.99"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/parte2.png"></li>
		  	<li class="layer" data-depth="0.50"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/parte1.png"></li>
		  	<li class="layer" data-depth="0.70"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/parte3.png"></li>
		  	<li class="layer" data-depth="0.80"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/parte4.png"></li>
		  	<li class="layer" data-depth="0.20"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/name.png"></li>
		  	<li class="layer" data-depth="0.00"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/logo.png"></li>
		  	<li class="layer" data-depth="0.40"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/date.png"></li>
		  </ul>
	</div>

	<div id="video">
		<div id="video_container" class="embed-responsive embed-responsive-16by9">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/6dTRkCfueh0?" frameborder="0" allowfullscreen></iframe>	
		</div>
	</div>

	<div id="about">
		<img id="about-dots" src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/about-dots.svg"/>
		<img id="about-title" src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/about-title.svg"/>
		<div id="about-info">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<h1>Emprendimiento Social</h1>
				<p>El principal enfoque de este Hackathon es el emprendimiento social tecnológico, en el que se logren soluciones de impacto en diferentes sectores de la población</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<h1>Vinculación</h1>
				<p>Los proyectos estarán en todo momento vinculados con diferentes organizaciones sin fines de lucro, esto para lograr que el esfuerzo esté dirigido en la mejor forma y al lugar correcto</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<h1>Innovación para todos</h1>
				<p>Los resultados que brindará este Hackathon no sólo impactarán a los participantes, sino que serán la base del desarrollo social cumpliendo las necesidades que este conlleva</p>
			</div>
		</div>
	</div>
	
	<!--<div id="inter-1">
	</div>-->

	<div id="schedule">
		<img id="schedule-title" src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/schedule-title.png"><hr>
		<img src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/schedule.png">
	</div>

	<!--<div id="inter-2">
	</div>-->

	<div id="sponsors">
		<img id="sponsors-chmday" src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/hack-sponsors.svg"/>
		<div id="sponsors-logos" >
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/tec-azul.svg"/></div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ashoka-campus.svg"/></div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/mlh.png"/></div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/zona-ei.svg"/></div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/acm.svg"/></div>
			</div>
		</div>
		<img id="sponsors-dots" src="<?php echo ChangeMaker::$domain; ?>assets/img/hack/sponsors-dots.svg"/>
	</div>
	<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/parallax.js"></script>
	<script type="text/javascript">
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>
	</body>
</html>