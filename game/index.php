<?
	//Index Standard: (Header y Footer)
	
	//Define la zona en la que te encuentras
	define("RAG_SECTION", "game");
	
	//para empezar cargamos el archivo de configuraci�n de RagnaJAG, este archivo se encargar� de cargar todas las librer�as b�sicas
	require_once '../internal/core.php';
	
	if (isset($ch)){ //Si tiene char
		//Primero de todo lanzar funciones relacionadas con los controladores
		require_once Controllers::load( Security::out('a') );
		
		//Despues mostramos los Views asociados por pantalla
		if (RAG_MODE == MVC_STANDARD) require_once RAG_SECTION."/views/template/header.php";
		require_once Views::load(Security::out('a'));
		if (RAG_MODE == MVC_STANDARD) require_once RAG_SECTION."/views/template/footer.php";
	}else{
		//Primero de todo lanzar funciones relacionadas con los controladores
		require_once Controllers::load('nuevo', true);
		
		//Despues mostramos los Views asociados por pantalla
		if (RAG_MODE == MVC_STANDARD) require_once RAG_SECTION."/views/template/header.php";
		require_once Views::load('nuevo');
		if (RAG_MODE == MVC_STANDARD) require_once RAG_SECTION."/views/template/footer.php";
	}
	
?>