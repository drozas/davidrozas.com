<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Dissertations (MSc Computer Science / BSc Computer Science)", 
								"- \"Development and integration of an awareness applications manager into ASTRA\".<br />
								- [<a href=\"pub/Rozas2009d.pdf\" target=\"_blank\" onclick=\"javascript: pageTracker._trackPageview('/downloads/astra-thesis');\">Rozas2009d</a>]: document in English with an abstract translation into Spanish.<br />
								ASTRA (Awareness Services and Systems - Towards Theory and Realization)
								is a project that researches awareness systems and services that are used for social
								purposes through the creation of awareness applications. The project  is part of the work developed for ASTRA, and it aims the creation and
								integration of a system to manage the mentioned awareness applications, including
								functionalities for sharing, tagging, locating, appropriating and adapting them, taking
								into account the concerns about privacy in terms of visibility for all the involved
								elements (applications, tags, etc.).<br /><br />" .
								
								"- \"gTurnos: Turns manager under Moodle platform\".<br />
								- [<a href=\"pub/Rozas2007g.pdf\" target=\"_blank\" onclick=\"javascript: pageTracker._trackPageview('/downloads/gturnos-thesis');\">Rozas2007g</a>]: document in Spanish, with some appendixes in English.<br />
								gTurnos is a block for Moodle, which manages the delivery of turns. It considers necessities of teachers and students.
								The idea was born by the necessity of computerizing the delivery of turns process for actual exams at my university. This process was managed using a list, signing up a sheet on the door. This old process was uncomfortable, and the resulting list was not compact and frequently decompensated.
								gTurnos always provides compact lists and, as in queue, those users that register first have higher priority." 

								,
								"Proyectos de Fin de Carrera (Ingeniería en Informática / Ingeniería Técnica en Informática de Sistemas)",
								"- \"Desarrollo e integración de un gestor de aplicaciones \"awareness\" para la plataforma ASTRA\".<br />
								- [<a href=\"pub/Rozas2009d.pdf\" target=\"_blank\" onclick=\"javascript: pageTracker._trackPageview('/downloads/astra-thesis');\">Rozas2009d</a>]: documento en inglés, con una traducción del resumen en español.<br />
								
								ASTRA (Awareness Services and Systems - Towards Theory and Realization) es
								un proyecto que investiga sistemas y servicios \"awareness\" empleados para propósitos
								sociales a través de la creación de aplicaciones \"awareness\". El proyecto se enmarca dentro del trabajo desarrollado en ASTRA, y
								tiene como objetivo la creación e integración de un sistema para gestionar dichas
								aplicaciones, incluyendo funcionalidades para compartirlas, etiquetarlas, localizarlas,
								recuperarlas y adaptarlas, haciendo hincapié en la privacidad en términos de visibilidad
								de todos los elementos (aplicaciones, etiquetas, etc.).<br /><br />" .
								
							
								"- \"gTurnos: módulo gestor del reparto de turnos bajo Moodle\".<br />
								- [<a href=\"pub/Rozas2007g.pdf\" target=\"_blank\" onclick=\"javascript: pageTracker._trackPageview('/downloads/gturnos-thesis');\">Rozas2007g</a>]: documento en español, con algunos apéndices en inglés.<br />
								
								gTurnos es un módulo que gestiona el reparto de turnos para la realización de exámenes
								presenciales, generando listas de presentación compactas y equilibradas. Lo realiza a través
								de un algoritmo sencillo, que permite flexibilidad al encargado de determinar los rangos de
								tiempo, y a su vez tiene en cuenta las preferencias de los solicitantes de turnos.
								Está diseñado para integrarse en Moodle, una plataforma de aprendizaje basada en software
								libre, con una base de usuarios muy amplia y en constante crecimiento, construida bajo
								principios pedagógicos constructivistas." 
								)
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
