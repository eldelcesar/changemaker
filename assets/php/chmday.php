<?php

class ChangeMaker{

	//------------System Information--------------
	static public $dir 	= "./";
	//------------System Information--------------

	//Nombre de la Base de Datos
	static public $db_name 		= "salvador";
	static public $db_user 		= "root";//Configuracion básica de MAMP
	static public $db_password	= "root";//Configuracion básica de MAMP

	//Siempre local host a menos de que haya servidor externo
	static public $db_hostname 	= "localhost";
	
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
			echo'<a href="http://www.changemakerday.com/"><img src="http://www.changemakerday.com/assets/img/logo-naranja.svg"></a>';
		}else{
			echo'<a href="http://www.changemakerday.com/"><img src="http://www.changemakerday.com/assets/img/logo-negro.svg"></a>';	
		}
		echo
				'<div id="menu-bar-options">
					<a id="program-bar" href="http://www.changemakerday.com/programa/">PROGRAMA</a>
					<a id="press-bar" href="http://www.changemakerday.com/prensa/">PRENSA</a>
					<a id="hackathon-bar" href="http://www.changemakerday.com/socialhack/">HACKATHON</a>
					<p>HULT PRICE</p>
					<a id="contact-bar" href="http://www.changemakerday.com/contacto/">CONTACTO</a>
				</div>
			</div>
		';
	}
}
?>