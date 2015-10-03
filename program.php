<?php
	include_once('assets/php/chmday.php');
	$con = new mysqli(ChangeMaker::$db_hostname,ChangeMaker::$db_user,ChangeMaker::$db_password,ChangeMaker::$db_name);
	$con->query("SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>ChangeMaker Day | Programa</title>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/dimmer.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/shape.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/chmday.css">
		<link rel="stylesheet" type="text/css" href="<?php echo ChangeMaker::$domain; ?>assets/css/program.css">
		<!-- Icono de la pagina -->
		<link rel="shorcut icon" href="<?php echo ChangeMaker::$domain; ?>assets/img/icon.ico">
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/dimmer.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/shape.min.js"></script>
		<script type="text/javascript" src="<?php echo ChangeMaker::$domain; ?>assets/js/program.js"></script>
	</head>
	<body>

		<?php
			ChangeMaker::menubar(false);
		?>

		<!-- Program -->
		<div id="program">
			<div id="program-title"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/program-title.svg"></div>
			<div id="program-days">
				<div id="day-name" class="program-filter">FECHAS <span class="glyphicon glyphicon-calendar"></span></div>
				<div id="day-1" class="program-filter">TODOS</div>
				<div id="day-2" class="program-filter">MIÉRCOLES</div>
				<div id="day-3" class="program-filter">JUEVES</div>
			</div>
			<div id="program-scenario">
				<div id="scenario-name" class="program-filter">ESCENARIOS <span class="glyphicon glyphicon-tree-deciduous"></span></div>
				<div id="scenario-1" class="program-filter">TODOS</div>
				<div id="scenario-2" class="program-filter">PEOPLE</div>
				<div id="scenario-3" class="program-filter">TECH</div>
				<div id="scenario-4" class="program-filter">GREEN</div>
			</div>
			<div id="program-activities">
				<?php
				$result = $con->query("SELECT * FROM activities");
				while ($activity = $result->fetch_array()) {
					$name = $activity["name"];
					$id = $activity["id"];
					$date_id = $activity["date_id"];
					$scenario_id = $activity["scenario_id"];
					echo '<a href="'.ChangeMaker::$domain.'programa/actividad/'.$id.'"><div class="program-option day-'.($date_id+1).' scenario-'.($scenario_id+1).'">'.$name.'</div></a>';
				}
				?>

				<!--<a href=""<div class="program-option day-2 scenario-3">Próximamente</div></a>-->
				<!--<a href=""><div class="program-option day-3 scenario-2">PEOPLE</div></a>
				<a href=""><div class="program-option day-3 scenario-3">TECH</div></a>
				<a href=""><div class="program-option day-3 scenario-2">PEOPLE</div></a>
				<a href=""><div class="program-option day-3 scenario-4">GREEN</div></a>
				<a href=""><div class="program-option day-3 scenario-4">GREEN</div></a>
				<a href=""><div class="program-option day-2 scenario-3">TODOS</div></a>
				<a href=""><div class="program-option day-3 scenario-4">GREEN</div></a>
				<a href=""><div class="program-option day-2 scenario-3">TODOS</div></a>
				<a href=""><div class="program-option day-3 scenario-2">PEOPLE</div></a>
				<a href=""><div class="program-option day-3 scenario-2">PEOPLE</div></a>
				<a href=""><div class="program-option day-3 scenario-4">GREEN</div></a>
				<a href=""><div class="program-option day-2 scenario-3">TODOS</div></a>
				<a href=""><div class="program-option day-3 scenario-2">PEOPLE</div></a>
				<a href=""><div class="program-option day-3 scenario-3">TECH</div></a>
				<a href=""><div class="program-option day-2 scenario-3">TODOS</div></a>
				<a href=""><div class="program-option day-3 scenario-4">GREEN</div></a>-->
			</div>
		</div>
		<div id="footer-dots"><img src="<?php echo ChangeMaker::$domain; ?>assets/img/program-bg.svg"></div>
	</body>
</html>
<?php
	$con->close();
?>

