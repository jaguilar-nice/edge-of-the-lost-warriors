<?
	//Este es el archivo de configuraci�n, intentaremos que haya el menor n�mero posible de
	//archivos de este tipo. Para ello tiraremos mucho de la convenci�n y el est�ndard.
	
	define("RAG_MODE", MVC_STANDARD); //Define el modo a MVC_STANDARD
	
	define ("URL", "http://swedges.net/swedges3/"); //Define la URL basica
	define('URL_FORO', "#"); //Define la URL del foro
	
	//Datos de la base de datos
	$db_config = array (
		'db_type' => "mysql", //De momento ragnajag soporta: mysql
		'db_host' => "localhost",
		'db_name' => "sw_edges",
		'db_user_name' => "swedges",
		'db_user_pwd' => ""
	);
?>