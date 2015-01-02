<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: This will be in a db or at least a file
	$items = array(
	    array(
	        "Projects",
	        "Some of the projects I am (or have been) involved are:
								<br />- <a href=\"http://www.p2pvalue.eu/\" target=\"_blank\">P2PValue</a>: it is a project which will foster the CBPP phenomenon by providing a techno-social software platform specifically designed to facilitate the creation of resilient and sustainable CBPP communities.
								<br />- <a href=\"http://www.qlectives.eu/\" target=\"_blank\">QLectives</a>: it is a project bringing together top social modelers, peer-to-peer engineers and physicists to design and deploy next generation self-organising socially intelligent information systems.
								<br />- <a href=\"http://www.informe-espana.es/\" target=\"_blank\">" . utf8_decode("Informe España") . "</a>: it is a digital platform whose main objective consists of promoting a serious dialogue between all social actors enabling communication and understanding amongst them, and creating common grounds for social consensus.
								<br />- <a href=\"http://www.wisdem.org/\" target=\"_blank\">Wisdem</a>: it is a global network in which people affected by dementia, families, caregivers and professionals can share their experiences, methods and practice with others around the world, drawing together individual efforts to improve the good of the whole.
								<br />- <a href=\"http://www.cvirtual.org/\" target=\"_blank\">Cvirtual.org</a>: it is a website oriented towards psychosocial care for the elderly and uses new technologies and 2.0 Tools to foster user interaction between families, caregivers, health professionals and elderly people.
								<br />- <a href=\"http://www.wikisaber.es/\" target=\"_blank\">Wikisaber.es</a>: it is an educational portal for teachers, students and parents based on collaborative learning.
								<br />- <a href=\"http://www.neteduca.pt/\" target=\"_blank\">Neteduca.pt</a>: it is the Portuguese version of Wikisaber based on Drupal.
								<br />- <a href=\"http://www.astra-project.net/\" target=\"_blank\">ASTRA</a>: it is a project that researches awareness systems and services that are used for social purposes.
								<br />- <a href=\"http://gturnos.sourceforge.net/\" target=\"_blank\">gTurnos</a>: it is a block for Moodle (a free software LMS), which manages the delivery of turns, considering the necessities of teachers and students.
								<br />- <a href=\"http://www.alternativa3.com/\" target=\"_blank\">Alternativa 3</a>: it is a cooperative society that since 1992 has lived and worked for Fair Trade."
	        ,
	        "Proyectos",
	        "Algunos de los proyectos en los que participo o he participado son:
								<br />- <a href=\"http://www.p2pvalue.eu/\" target=\"_blank\">P2PValue</a>: es un proyecto que promueve el fenómeno de CBPP a través de la creación de una plataforma software que facilite la creación de comunidades CBPP robustas y sostenibles.
								<br />- <a href=\"http://www.qlectives.eu/\" target=\"_blank\">QLectives</a>: es un proyecto que une los esfuerzos de creadores de modelos sociales, ingenieros P2P y físicos para diseñar y llevar a cabo una nueva generación de sistemas de información inteligentes aplicados a la sociología.
								<br />- <a href=\"http://www.informe-espana.es/\" target=\"_blank\">Informe España</a>:  es una plataforma digital con el objetivo principal de promover el diálogo entre diversos actores sociales habilitando canales de comunicación que acerquen al consenso.
								<br />- <a href=\"http://www.wisdem.org/\" target=\"_blank\">Wisdem</a>: es una red global en la que personas afectadas por demencias, sus familiares y prestigiosos profesionales del área pueden compartir sus experiencias, métodos y prácticas.
								<br />- <a href=\"http://www.cvirtual.org/\" target=\"_blank\">Cvirtual.org</a>: es un espacio de vanguardia dirigido al sector sociosanitario, en el que se apuesta por el desarrollo de nuevos perfiles profesionales de jóvenes cualificados, especializados en el envejecimiento de calidad, la investigación y la atención sociosanitaria.
								<br />- <a href=\"http://www.wikisaber.es/\" target=\"_blank\">Wikisaber.es</a>: es un portal educativo para estudiantes, padres y profesores fundamentado en la enseñanza y el aprendizaje colaborativos.
								<br />- <a href=\"http://www.neteduca.pt/\" target=\"_blank\">Neteduca.pt</a>: versión portuguesa de Wikisaber basada en Drupal.
								<br />- <a href=\"http://www.astra-project.net/\" target=\"_blank\">ASTRA</a>: proyecto que investiga la utilización de sistemas y servicios \"awareness\" para propósitos sociales.
								<br />- <a href=\"http://gturnos.sourceforge.net/\" target=\"_blank\">gTurnos</a>: es un bloque para Moodle (un LMS libre) que gestiona el reparto de turnos para exámenes presenciales, generando listas compactas y equilibradas.
								<br />- <a href=\"http://www.alternativa3.com/\" target=\"_blank\">Alternativa 3</a>: es una sociedad cooperativa basada en la importación, elaboración y distribución de productos ecológicos de Comercio Justo."),
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
