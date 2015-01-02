<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	$items = array(		array(
								"A brief presentation", 
								"<img src=\"img/david_rozas_thumbnail_be1.jpg\" id=\"profile-pic\">Welcome to my personal website. My name is David Rozas Domingo. I am a free software enthusiast, currently studying a PhD under the supervision of Professor <a href=\"http://cress.soc.surrey.ac.uk/web/people/director-cress\" target=\"_blank\">Nigel Gilbert</a>
	                            and Dr. <a href=\"http://www.surrey.ac.uk/sociology/people/paul_hodkinson/\" target=\"_blank\">Paul Hodkinson</a> at the <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">University of Surrey</a> (Guildford, UK). 
								Some of my areas of interest are FLOSS (Free/Libre Open Source Software), CBPP (Commons-Based Peer Production), social computing or CSCW (Computer Supported Cooperative Work).
	                            <br />My current research consists of analysing the <a href=\"http://drupal.org/\" target=\"_blank\">Drupal</a> community from a sociological perspective in order to extract insights related to the dynamics, group decision making procedures,
	                            motivations to contribute and mechanisms employed for the economic sustainability of this community.
								<br /> If you want to contact me, you can send me an e-mail to <a href=\"mailto:david.rozas@gmail.com\">david.rozas@gmail.com</a>",
								"Breve presentación",
								"<img src=\"img/david_rozas_thumbnail_rc2.jpg\" id=\"profile-pic\">Bienvenido a mi página personal. Me llamo David Rozas Domingo. Me apasiona el software libre y actualmente estoy estudiando un Doctorado bajo la supervisión del Profesor <a href=\"http://cress.soc.surrey.ac.uk/web/people/director-cress\" target=\"_blank\">Nigel Gilbert</a>
	                            y el Dr. <a href=\"http://www.surrey.ac.uk/sociology/people/paul_hodkinson/\" target=\"_blank\">Paul Hodkinson</a> en la <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">Universidad de Surrey</a> (Guildford, Reino Unido). 
								Algunas de mis áreas de interés son FLOSS (Free/Libre Open Source Software), CBPP (Commons-Based Peer Production), la informática social o CSCW (Computer Supported Cooperative Work).
								<br />Mi investigación actual consiste en el análisis de la comunidad de <a href=\"http://drupal.org/\" target=\"_blank\">Drupal</a> desde una perspectiva sociológica, con el objetivo de conocer las dinámicas, procesos de decisión colectivos,
	                            motivaciones para realizar contribuciones, así como los mecanismos que permiten la sostenibilidad económica de esta comunidad.
	                            <br /> Si quieres contactarme, puede enviarme un correo a <a href=\"mailto:david.rozas@gmail.com\">david.rozas@gmail.com</a>"),
	        array(
								"Academic information",
								"- I took a Foundational Computer Science Course in JEE platform at <a href=\"http://www.infosys.com/\" target=\"_blank\">Infosys' Global Education Centre</a> (Mysore, India) in 2010.<br />
								- I got a Computer Engineering degree (5 years) at <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, Spain) in 2009.<br />
								- I was exchange student at <a href=\"http://www.ntnu.no\" target=\"_blank\">Norges Teknisk-Naturvitenskapelige Universitet</a> (Trondheim, Norway) during the course 2007-2008.<br /> 
								- I got a Technical Engineering in Computer Systems degree (3 years) in  2007 at <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, Spain).",
								"Información académica",
								"- Realicé un curso en la plataforma JEE en el <a href=\"http://www.infosys.com/\" target=\"_blank\">Centro Global Educativo de Infosys</a> (Mysore, India) durante 2010.<br />
								- Acabé Ingeniería Informática en la  <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, España) en 2009. <br />
								- Fuí estudiante de intercambio en la <a href=\"http://www.ntnu.no\" target=\"_blank\">Norges Teknisk-Naturvitenskapelige Universitet</a> (Trondheim, Noruega) durante el curso 2007-2008.<br /> 
								- Acabé Ingeniería Técnica en Informática de Sistemas en 2007, en la <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, España)"),

						
						
				);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
