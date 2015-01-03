<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Code", 
								"You can find most of the code I am working or I have worked with at my <a href=\"https://github.com/drozas/\" target=\"_blank\">GitHub</a> and <a href=\"https://drupal.org/user/740628\" target=\"_blank\">Drupal</a> profiles. 
								<br /> On the other hand, you can find the code that I originally developed for my Master thesis and my Bachelor dissertation at sourceforge.net:
								<br />- <a href=\"http://sourceforge.net/projects/astra-project/\" target=\"_blank\">ASTRA</a> (contribution).
								<br />- <a href=\"http://sourceforge.net/projects/gturnos/\" target=\"_blank\">gTurnos</a>.",
								"Código",
								"En mis perfiles de <a href=\"https://github.com/drozas/\" target=\"_blank\">GitHub</a> y <a href=\"https://drupal.org/user/740628\" target=\"_blank\">Drupal</a> puedes encontrar gran parte del código con el que estoy trabajando o he trabajado.
								<br /> Por otro lado, puedes encontrar el código de los proyectos que realicé como parte de mis Proyectos de Fin de Carrera en sourcerforget.net:
								<br />- <a href=\"http://sourceforge.net/projects/astra-project/\" target=\"_blank\">ASTRA</a> (contribución).
								<br />- <a href=\"http://sourceforge.net/projects/gturnos/\" target=\"_blank\">gTurnos</a>."),
						array(	"Lab",
								"This is just a set of handy links to testing instances of some of the code I am working with. The code is deployed in testing servers and might not work at the moment you visit them! ;-)
								<br />- <a href=\"http://www.davidrozas.com/lab/drupal_planet_archive.php\" target=\"_blank\">Drupal Planet Links Archive</a>: archive of links published at Drupal Planet.
								<br />- <a href=\"http://elio.surrey.ac.uk/\" target=\"_blank\">Elio</a>: testing server at CRESS, with several QScience instances and other Drupal experimental projects.
							    <br />- <a href=\"http://patterns.inn.ac/\" target=\"_blank\">Patterns Server@ETHZ</a>: a Patterns server instance running at a Swiss Federal Institute of Technology in Zurich (ETHZ) testing server.",
								"Laboratorio",
								"Es un conjunto de links para tener fácilmente a mano con instancias del código con el que estoy trabajando. ¡Están desplegadas en servidores de prueba, y es muy posible que no funcionen en el momento en el que las visites! ;-)
								<br />- <a href=\"http://www.davidrozas.com/lab/drupal_planet_archive.php\" target=\"_blank\">Drupal Planet Links Archive</a>: archivo de enlaces publicados en Drupal Planet.
								<br />- <a href=\"http://elio.surrey.ac.uk/\" target=\"_blank\">Elio</a>: servidor de pruebas en CRESS, con varias instancias de QScience y otros proyectos experimentales con Drupal.
							    <br />- <a href=\"http://patterns.inn.ac/\" target=\"_blank\">Patterns Server@ETHZ</a>: instancia del servidor de Patterns instalada en un servidor de testeo del Swiss Federal Institute of Technology de Zurich (ETHZ).")
	);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
