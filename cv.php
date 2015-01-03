<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

            $text = "If you need my CV or any reference letter, please <a href=\"mailto:david.rozas@gmail.com\">send me an e-mail</a>, indicating your preferred document format (.pdf, .odt, .doc, ...) and language (English or Spanish). You can also contact me
								through <a href=\"http://uk.linkedin.com/in/drozas\" target=\"_blank\">LinkedIn</a>, where I keep an updated version of my CV." ;
	$items = array(		array(
								"Request CV", 
								$text,
								"Solicitar CV",
								"Si quieres solictar mi CV o cartas de referencia, puedes <a href=\"mailto:david.rozas@gmail.com\">enviarme un correo</a>, indicando el formato (.pdf, .odt, .doc, ...) y el idioma (inglés o español) en el que prefieres recibirlo. Puedes contactarme igualmente
								a través de <a href=\"http://uk.linkedin.com/in/drozas\" target=\"_blank\">LinkedIn</a>, en donde mantengo una versión actualizada de mi CV.")
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
	print_form($form);    
	print_footer();	
?>	
