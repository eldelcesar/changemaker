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
		<?php
			$id = $_GET["activity"];
			$result = $con->query("SELECT * FROM activities WHERE id='$id'");
			$activity = $result->fetch_array();
			$name = $activity["name"];
			$person = $activity["main_person"];
			$description = $activity["description"];
			$scenario_id = $activity["scenario_id"];
			$time = $activity["time"];
			$date = $activity["date"];
			$register = $activity["register"];
			$background = $activity["background"];
			$organizer = $activity["organizer"];
			$logo = $activity["logo"];
			$scenario = $activity["scenario"];
			$url_fb = $activity["url_fb"];
			$flag= $activity["isRegister"];
			echo '
		<div id="activity-name" style="background-image: url('.ChangeMaker::$domain.'assets/img/fondos/'.$background.')">
			<h1>'.$name.'</h1>
			<img src="'.ChangeMaker::$domain.'assets/img/scenario-'.$scenario_id.'.svg">
		</div>
		<div id="activity-info">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h1>por <strong>'.$person.'</strong></h1>
				<p>'.$description.'</p>
				<p><strong>Más información</strong></p>
				<div id="logos" class="col-xs-3 col-sm-3 col-md-3">
					<a href="'.$url_fb.'" target="_blank"><img class="sponsor" src="'.ChangeMaker::$domain.'assets/img/activities/'.$logo.'"></a>
				</div>
			</div>

			<div id="activity-register" class="col-xs-12 col-sm-6 col-md-6">';
				if ($flag == 1) {
					echo '<a href="'.$register.'" target="_blank"><h1 id="activity-img">Registrate!</h1></a><hr>';
				}
				echo '<h1>Lugar: <strong>'.$scenario.'</strong></h1>
				<h1>Fecha: <strong>'.$date.'</strong></h1>
				<h1>Horario: <strong>'.$time.'</strong></h1><hr>
				<p>Organizado por <strong>'.$organizer.'</strong></p>
			</div>
		</div>';
		?>
	</body>
</html>
<?php
	$con->close();
?>