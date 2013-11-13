<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Code", 
								"You can find most of the code I have worked with at my <a href=\"https://github.com/drozas/\" target=\"_blank\">GitHub</a> and <a href=\"https://drupal.org/user/740628\" target=\"_blank\">Drupal</a> profiles. 
								<br /> On the other hand, you can find the code that I originally developed for my Master thesis and my Bachelor dissertation at sourceforge.net:
								<br />- <a href=\"http://sourceforge.net/projects/astra-project/\" target=\"_blank\">ASTRA</a> (contribution).
								<br />- <a href=\"http://sourceforge.net/projects/gturnos/\" target=\"_blank\">gTurnos</a>.",
								"Código",
								"En mis perfiles de <a href=\"https://github.com/drozas/\" target=\"_blank\">GitHub</a> y <a href=\"https://drupal.org/user/740628\" target=\"_blank\">Drupal</a> puedes encontrar gran parte del código con el que he trabajado.
								<br /> Por otro lado, puedes encontrar el código de los proyectos que realicé como parte de mis Proyectos de Fin de Carrera en sourcerforget.net:
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
