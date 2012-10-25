<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Code", 
								"I am planning to upload all the code I have been working in during my studies under a GPL license. 
								<br /> For the moment you can download the code I developed for my thesis work:
								<br />- <a href=\"http://sourceforge.net/projects/astra-project/\" target=\"_blank\">ASTRA</a> (contribution).
								<br />- <a href=\"http://sourceforge.net/projects/gturnos/\" target=\"_blank\">gTurnos</a>.",
								"Código",
								"Estoy planeando subir todo el código que he realizado durante mis estudios bajo una licencia GPL. 
								<br /> De momento puedes descargar el código que he desarrollado para mis PFCs:
								<br />- <a href=\"http://sourceforge.net/projects/astra-project/\" target=\"_blank\">ASTRA</a> (contribución).
								<br />- <a href=\"http://sourceforge.net/projects/gturnos/\" target=\"_blank\">gTurnos</a>.")
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
