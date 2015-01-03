<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);
	
	//drozas: Process publications as a list, and in a single language
	$pubs = "
        <b>Proceedings:</b> <br />
        - Rozas, D (2014). Drupal as a Commons-Based Peer Production community:
          a sociological perspective. In Proceedings of The International Symposium on
          Open Collaboration (OpenSym '14). ACM, New York, NY, USA, , Pages 36 ,
          2 pages. DOI=10.1145/2641580.2641624 <a href=\"http://doi.acm.org/10.1145/2641580.2641624\">http://doi.acm.org/10.1145/2641580.2641624</a>.<br />
        <b>Abstracts:</b> <br />
	    - Rozas, D., Gilbert, N. & Hodkinson, P. (2015). Contribution beyond source code in Free/Libre
          Open Source Software: the role of affective labour in the Drupal community (accepted,
          to be presented on 15/04/2015). In BSA 2015 Annual Conference. British Sociological Association.<br />
	    <b>Conference presentations and talks:</b> <br />
	    - <a href=\"http://www.opensym.org/2014/08/11/opensym-doctoral-symposium-with-keynote-on-a-strange-animal-called-peer-reviewed-publishing/\">Drupal as a Commons-Based Peer Production community:
          a sociological perspective</a>, Doctoral Symposium, OpenSym 2014
          (Berlin, 26/08/2014).<br />
	    - <a href=\"http://camp.drupalne.org/session/drupal-case-commons-based-peer-production\">Drupal as a case of Commons-based Peer Production</a>, DrupalCamp North East 2014 
	      (Sunderland, 25/07/2014).<br />
	    - <a href=\"http://2013.drupalcamplondon.co.uk/session/automating-drupal-development-patterns\">Automating Drupal Development with Patterns: introducing 7.x-2.x</a>, DrupalCamp London 2013
          (London, 02/03/2013).<br />
	    - <a href=\"http://2012.drupalcamp.es/es/sesiones/automating-drupal-development-patterns-38\">Automating Drupal Development with Patterns</a> (co-presenting with Hao Liao, from the University of Fribourg), DrupalCamp Spain 2012
          (Madrid, 20/10/2012). <br />
  	    <b>Dissertations:</b> <br />
	    - Rozas, D (2009). Development and integration of an awareness applications manager into ASTRA. Supervised by Montalvo, S. & Divitini M. 
          (Master's thesis, Universidad Rey Juan Carlos). <br />
  	    - Rozas, D (2007). gTurnos: " . utf8_decode(módulo) ." gestor del reparto de turnos bajo Moodle. Supervised by Centeno, J. 
          (Bachelor's thesis, Universidad Rey Juan Carlos). <br />
	";

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Publications and presentations", $pubs
								,
								"Publicaciones y presentaciones",$pubs
								)
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
