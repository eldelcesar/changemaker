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
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/contact.css">
		<!-- Icono de la pagina -->
		<link rel="shorcut icon" href="<?php echo ChangeMaker::$domain; ?>assets/img/icon.ico">
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/dimmer.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/shape.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/contact.js"></script>
	</head>
	<body>

		<?php
			ChangeMaker::menubar(false);
		?>

		<!-- Contact -->
		<img id="contact-bg" src="<?php echo ChangeMaker::$domain; ?>assets/img/contacto-dots.svg">
		<div id="contact">
			<div id="contact-info" class="col-xs-12 col-sm-6 col-md-6">
				<img id="contact-title" src="<?php echo ChangeMaker::$domain; ?>assets/img/contact-title.svg">
				<p><strong>Alejandro</strong> Morales</p>
				<p><span class="glyphicon glyphicon-phone-alt"></span> <strong>(+52) 3669-3000 Ext. 1413<strong></p>
				<p><span class="glyphicon glyphicon-envelope"></span> <strong>moralex@itesm.mx<strong></p>
				<img id="contact-logo" src="<?php echo ChangeMaker::$domain; ?>assets/img/logo-negro.svg"><br>
			</div>
			
			<div id="contact-map" class="col-xs-12 col-sm-6 col-md-6">
				<img id="scenario-1" class="active" src="<?php echo ChangeMaker::$domain; ?>assets/img/scenario-1.svg">
				<img id="scenario-2" src="<?php echo ChangeMaker::$domain; ?>assets/img/scenario-2.svg">
				<img id="scenario-3" src="<?php echo ChangeMaker::$domain; ?>assets/img/scenario-3.svg">
				<img id="scenario-4" src="<?php echo ChangeMaker::$domain; ?>assets/img/scenario-4.svg">
				<img id="map" src="<?php echo ChangeMaker::$domain; ?>assets/img/map-1.png">
				<!--<img id="map" src="<?php echo ChangeMaker::$domain; ?>assets/img/map-2.png">
				<img id="map" src="<?php echo ChangeMaker::$domain; ?>assets/img/map-3.png">
				<img id="map" src="<?php echo ChangeMaker::$domain; ?>assets/img/map-4.png">-->
			</div>
		</div>

	</body>
</html>