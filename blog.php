<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"My blog", 
								"I am sorry, this section is currently unavailable.",
								"Mi blog",
								"Lo siento, actualmente esta sección no está disponible.")
					);
	/*$items = array(		array(
								"My blog", 
								"If you want to know more about me, you can visit my <a href=\"http://blog.davidrozas.com\" target=\"_blank\"> blog</a> or take a look to some " .
								"of my pictures <a href=\"http://gallery.davidrozas.com\" target=\"_blank\"> in my gallery</a>.",
								"Mi blog",
								"Si quieres saber más acerca de mí, puedes visitar mi <a href=\"http://blog.davidrozas.com\" target=\"_blank\"> blog</a> o ver algunas de mis fotos " .
								"en mi <a href=\"http://gallery.davidrozas.com\" target=\"_blank\"> galería</a>.")
					);*/

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
