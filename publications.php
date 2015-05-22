<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);
	
	//drozas: Process publications as a list, and in a single language
	$pubs = "
        <b>Peer reviewed conference papers, proceedings and abstracts:</b> <br />
        - Rozas, D & Gilbert, N. (2015). <a href=\"http://www.egosnet.org/jart/prj3/egos/main.jart?rel=de&reserve-mode=active&content-id=1392376003637&subtheme_id=1368705967560\">Drupal as a runaway object: conceptualisation of peer production activities through Activity Theory</a> (accepted, to be presented on 04/07/2015). EGOS 2015. European Group for Organizational Studies <br />
	    - Rozas, D., Gilbert, N. & Hodkinson, P. (2015). <a href=\"http://www.britsoc.co.uk/media/84184/Programme%20full.pdf?1427305668398\">Contribution beyond source code in Free/Libre
          Open Source Software: the role of affective labour in the Drupal community</a>. BSA 2015 Annual Conference (pp.73-74). British Sociological Association.
	      [<a href=\"publications/bsa15_pp73_74.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/bsa_2015\">Source (LaTeX)</a>].<br />
	    - Rozas, D (2014). Drupal as a Commons-Based Peer Production community:
          a sociological perspective. In Proceedings of The International Symposium on
          Open Collaboration (OpenSym '14). ACM, New York, NY, USA, , Pages 36 ,
          2 pages. DOI=10.1145/2641580.2641624 <a href=\"http://doi.acm.org/10.1145/2641580.2641624\">http://doi.acm.org/10.1145/2641580.2641624</a>. [<a href=\"publications/Rozas2014.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/drupal_cbpp_opensym2014\">Source (LaTeX)</a>].<br />
  	    <b>Edited volumes:</b> <br />
	    - Hassan, S., De Filippi, P., Rozas, D. (2016) (Eds.), Free/Libre/Open Source Distributed Platforms for Commons-based Peer Production, (tentative title), INC Reader. Institute of Network Cultures, University of Warwick (Forthcoming)
	    <b>Dissertations:</b> <br />
	    - Rozas, D (2009). Development and integration of an awareness applications manager into ASTRA. Supervised by Montalvo, S. & Divitini M. 
          (Master's thesis, Universidad Rey Juan Carlos). [<a href=\"publications/Rozas2009.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/tfc\">Source (LaTeX)</a>], [<a href=\"publications/astra_slides.pdf\">Slides (PDF)</a>].<br />
  	    - Rozas, D (2007). gTurnos: Turns manager under Moodle platform. Supervised by Centeno, J. 
          (Bachelor's thesis, Universidad Rey Juan Carlos). [<a href=\"publications/Rozas2007.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/pfc\">Source (LaTeX)</a>], [<a href=\"publications/gturnos_slides.pdf\">Slides (PDF)</a>]..<br />
	";

	//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Publications", $pubs
								,
								"Publicaciones",$pubs
								)
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
