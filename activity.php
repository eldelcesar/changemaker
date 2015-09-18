<?php
	include_once('assets/php/chmday.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>ChangeMaker Day | Contacto</title>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/dimmer.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/shape.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/chmday.css">
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/activity.css">
		<!-- Icono de la pagina -->
		<link rel="shorcut icon" href="<?php echo ChangeMaker::$domain; ?>assets/img/icon.ico">
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/dimmer.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/shape.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/activity.js"></script>
	</head>
	<body>

		<?php
			ChangeMaker::menubar(false);
		?>

		<!-- Contact -->
		<div id="activity-name">
			<h1>Hackathon Social</h1>
			<img src="<?php echo ChangeMaker::$domain; ?>assets/img/tech.svg">
		</div>
		<div id="activity-info">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h1>por <strong>ACM Tec Campus Guadalajara y Zona EI</strong></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare sollicitudin 
				felis. Phasellus sagittis tortor lectus, sed consequat eros malesuada nec. Ut rhoncus 
				sapien in dapibus ullamcorper. Ut laoreet lobortis urna. Cras ornare, arcu eget bibendum 
				aliquet, erat velit pretium ante, in ultrices ligula neque sit amet elit.</p>
				<p><strong>Más información</strong></p>
				<div class="col-xs-3 col-sm-3 col-md-3"><img class="sponsor" src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ACM_logo.svg"></div>
				<div class="col-xs-3 col-sm-3 col-md-3"><img class="sponsor" src="<?php echo ChangeMaker::$domain; ?>assets/img/sponsors/ZonaEI.svg"></div>
			</div>

			<div id="activity-register" class="col-xs-12 col-sm-6 col-md-6">
				<h1 id="activity-img">Registrate!</h1><hr>
				<h1>Escenario <strong>Tech</strong></h1>
				<h1>Fecha <strong>10 y 11 Octubre</strong></h1>
				<h1>Horario <strong>9:00-23:00 y 8:00-16:00</strong></h1><hr>
				<p>Organizado por <strong>Enrique Enciso y Diego Toledo</strong></p>
			</div>
		</div>
	</body>
</html>