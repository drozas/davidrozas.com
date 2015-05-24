<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	$items = array(		array(
								"A brief presentation", 
								"<img src=\"img/david_rozas_thumbnail_be1.jpg\" id=\"profile-pic\">Welcome to my personal website. My name is David Rozas Domingo. I am a free software enthusiast, currently studying a PhD under the supervision of Professor <a href=\"http://www.surrey.ac.uk/sociology/people/nigel_gilbert/\" target=\"_blank\">Nigel Gilbert</a> and Dr <a href=\"http://www.surrey.ac.uk/sociology/people/paul_hodkinson/\" target=\"_blank\">Paul Hodkinson</a> at the <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">University of Surrey</a> (Guildford, UK). 
                                 My research concerns individual involvement and group dynamics of Commons-Based Peer Production communities, focussing on the development community for Free/Libre Open Source Software <a href=\"http://drupal.org/\" target=\"_blank\">Drupal</a>. I am following an ethnographic approach, and using Activity Theory as a theoretical framework. I am also collaborating with the FP7 EU project <a href=\"http://www.p2pvalue.eu\" target=\"_blank\">P2Pvalue</a>, which is funding my studies.
                                 Some of my areas of interest are FLOSS (Free/Libre Open Source Software), CBPP (Commons-Based Peer Production), social computing or CSCW (Computer Supported Cooperative Work).
                                 <br /> My previous research was conducted within the FP7 EU project <a href=\"http://www.qlectives.eu\" target=\"_blank\">QLectives</a> (Quality Collectives) at the <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">University of Surrey</a>, and the FP6 EU project <a href=\"http://cordis.europa.eu/project/rcn/80445_en.html\" target=\"_blank\">ASTRA</a> (Awareness Services and Systems - Towards Theory and Realization) at <a href=\"http://www.ntnu.no\" target=\"_blank\">Norges Teknisk-Naturvitenskapelige Universitet</a> (Trondheim, Norway).
                                 <br /> I previously worked as a Technical lead in several social, educational and cultural projects based on Drupal for the company <a href=\"http://www.educatic.es\" target=\"_blank\">Educatic</a> (Madrid, Spain).",
								"Breve presentación",
								"<img src=\"img/david_rozas_thumbnail_be1.jpg\" id=\"profile-pic\">Bienvenido a mi página personal. Me llamo David Rozas Domingo. Me apasiona el software libre y actualmente estoy estudiando un Doctorado bajo la supervisión del Profesor <a href=\"http://www.surrey.ac.uk/sociology/people/nigel_gilbert/\" target=\"_blank\">Nigel Gilbert</a> y el Dr. <a href=\"http://www.surrey.ac.uk/sociology/people/paul_hodkinson/\" target=\"_blank\">Paul Hodkinson</a> en la <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">Universidad de Surrey</a> (Guildford, Reino Unido). 
                                Mi investigación se centra en el estudio de las dinámicas de participación a nivel individual y colectivo en comunidades de Producción Procomún entre Iguales (CBPP), enfocándome en la comunidad responsable del desarrollo del Software Libre <a href=\"http://drupal.org/\" target=\"_blank\">Drupal</a> como caso de estudio. Estoy llevando a cabo el estudio siguiendo un enfoque etnográfico, y utilizando Teoría de la Actividad como marco teórico. Igualmente, estoy colaborando en el proyecto de investigación de la Unión Europea (FP7) <a href=\"http://www.p2pvalue.eu\" target=\"_blank\">P2Pvalue</a>, que está financiando mis estudios.
                                <br /> Algunas de mis áreas de interés son FLOSS (Free/Libre Open Source Software), CBPP (Commons-Based Peer Production), la informática social o CSCW (Computer Supported Cooperative Work).
                                <br /> Anteriormente participé en los proyectos de investigación de la Unión Europea FP7 <a href=\"http://www.qlectives.eu\" target=\"_blank\">QLectives</a> (Quality Collectives) en la <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">Universidad de Surrey</a>, y FP6 <a href=\"http://cordis.europa.eu/project/rcn/80445_en.html\" target=\"_blank\">ASTRA</a> (Awareness Services and Systems - Towards Theory and Realization) en la <a href=\"http://www.ntnu.no\" target=\"_blank\">Norges Teknisk-Naturvitenskapelige Universitet</a> (Trondheim, Noruega).
                                <br /> Previamente, trabajé como coordinador del área técnica en la empresa <a href=\"http://www.educatic.es\" target=\"_blank\">Educatic</a> (Madrid, España), desarrollando varios proyectos de ámbito social, educativo y cultural basados en Drupal."
	                            ),
	        /*array(
								"Academic information",
								" - I am currently studying a PhD in Sociology at the <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">University of Surrey</a> (Guildford, UK): October 2013 - October 2016 (expected).<br />
	                            - I took a Foundational Computer Science Course in JEE platform at <a href=\"http://www.infosys.com/\" target=\"_blank\">Infosys' Global Education Centre</a> (Mysore, India) in 2010.<br />
								- I got a Computer Engineering degree (equivalent to a MSc in Computer Science) at <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, Spain) in 2009.<br />
								- I was exchange student at <a href=\"http://www.ntnu.no\" target=\"_blank\">Norges Teknisk-Naturvitenskapelige Universitet</a> (Trondheim, Norway) during the course 2007-2008.<br /> 
								- I got a Technical Engineering in Computer Systems degree (equivalent to a BSc in Computer Science) in  2007 at <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, Spain).",
								"Información académica",
								"- Actualmente estoy estudiando un Doctorado en Sociología en la  <a href=\"https://www.surrey.ac.uk/\" target=\"_blank\">Universidad de Surrey</a> (Guildford, Reino Unido): octubre 2013 - octubre 2016 (fecha de finalización prevista).<br />
	                            - Realicé un curso en la plataforma JEE en el <a href=\"http://www.infosys.com/\" target=\"_blank\">Centro Global Educativo de Infosys</a> (Mysore, India) durante 2010.<br />
								- Acabé Ingeniería Informática en la  <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, España) en 2009. <br />
								- Fuí estudiante de intercambio en la <a href=\"http://www.ntnu.no\" target=\"_blank\">Norges Teknisk-Naturvitenskapelige Universitet</a> (Trondheim, Noruega) durante el curso 2007-2008.<br /> 
								- Acabé Ingeniería Técnica en Informática de Sistemas en 2007, en la <a href=\"http://www.urjc.es\" target=\"_blank\">Universidad Rey Juan Carlos</a> (Madrid, España)"),*/

						
						
				);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
