<?php

class ChangeMaker{

	//------------System Information--------------
	static public $dir 	= "./";
	//------------System Information--------------

	//Nombre de la Base de Datos
	static public $db_name 		= "changemakerday";
	static public $db_user 		= "root";//Configuracion básica de MAMP
	static public $db_password	= "c3ntr4ld3c4mbio";//Configuracion básica de MAMP

	//Siempre local host a menos de que haya servidor externo
	static public $db_hostname 	= "localhost";
	//La tabla se llama "activities"
	
	//Configuración de Servidor
	//static public $db_name 		= "";
	//static public $db_user 		= "";
	//static public $db_password	= "";

	//static public $domain = "http://localhost/changemaker/";
	static public $domain = "http://www.changemakerday.com/";

	static function menubar($logo){
		echo
			'<div id="menu-bar">';
		if($logo){
			echo'<a href="'.self::$domain.'"><img src="'.self::$domain.'assets/img/logo-naranja.svg"></a>';
		}else{
			echo'<a href="'.self::$domain.'"><img src="'.self::$domain.'assets/img/logo-negro.svg"></a>';	
		}
		echo
				'<div id="menu-bar-options">
					<a id="program-bar" href="'.self::$domain.'programa/">PROGRAMA</a>
					<a id="hackathon-bar" href="'.self::$domain.'socialhack/">HACKATHON</a>
					<p>HULT PRIZE</p>
					<a id="contact-bar" href="'.self::$domain.'contacto/">CONTACTO</a>
				</div>
			</div>
		';
	}
}
?>