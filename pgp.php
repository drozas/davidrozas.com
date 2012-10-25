<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);
	
	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"PGP", 
								"Press <a href=\"./pk/drozas_pk.asc\" target=\"_blank\" onclick=\"javascript: pageTracker._trackPageview('/downloads/pgp-key');\">here</a> to download my public key.",
								"PGP",
								"Pincha <a href=\"./pk/drozas_pk.asc\" target=\"_blank\" onclick=\"javascript: pageTracker._trackPageview('/downloads/pgp-key');\">aquí</a> para descargar mi clave pública.")
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
