<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);
	
	//drozas: Process publications as a list, and in a single language
	$pubs = "
        <b>Full papers:</b> <br />
        - Rozas, D & Gilbert, N. (2015). <a href=\"http://www.egosnet.org/jart/prj3/egos/main.jart?rel=de&reserve-mode=active&content-id=1392376003637&subtheme_id=1368705967560\">Drupal as a runaway object: conceptualisation of peer production activities through Activity Theory</a> (accepted, to be presented on 03/07/2015). EGOS 2015. European Group for Organizational Studies <br />
        <b>Proceedings:</b> <br />
        - Rozas, D (2014). Drupal as a Commons-Based Peer Production community:
          a sociological perspective. In Proceedings of The International Symposium on
          Open Collaboration (OpenSym '14). ACM, New York, NY, USA, , Pages 36 ,
          2 pages. DOI=10.1145/2641580.2641624 <a href=\"http://doi.acm.org/10.1145/2641580.2641624\">http://doi.acm.org/10.1145/2641580.2641624</a>. [<a href=\"publications/Rozas2014.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/drupal_cbpp_opensym2014\">Source (LaTeX)</a>].<br />
        <b>Abstracts:</b> <br />
	    - Rozas, D., Gilbert, N. & Hodkinson, P. (2015). <a href=\"http://www.britsoc.co.uk/media/84184/Programme%20full.pdf?1427305668398\">Contribution beyond source code in Free/Libre
          Open Source Software: the role of affective labour in the Drupal community</a>. BSA 2015 Annual Conference (pp.73-74). British Sociological Association.
	      [<a href=\"publications/bsa15_pp73_74.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/bsa_2015\">Source (LaTeX)</a>].<br />
	    <b>Conference presentations and talks:</b> <br />
  	    - Talk is silver, code is gold? Contribution beyond source code in Free/Libre Open Source Software communities, PGR Seminar - School of Social Sciences at University of Surrey 
          (Guildford, 25/03/2015). [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.pdf\">PDF</a>], [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.odp\">Source (ODP)</a>].<br />
	    - <a href=\"http://www.opensym.org/2014/08/11/opensym-doctoral-symposium-with-keynote-on-a-strange-animal-called-peer-reviewed-publishing/\">Drupal as a Commons-Based Peer Production community:
          a sociological perspective</a>, Doctoral Symposium, OpenSym 2014
          (Berlin, 26/08/2014). [<a href=\"publications/drupal_cbpp_opensym2014.pdf\">PDF</a>], [<a href=\"publications/drupal_cbpp_opensym2014.odp\">Source (ODP)</a>].<br />
	    - <a href=\"http://camp.drupalne.org/session/drupal-case-commons-based-peer-production\">Drupal as a case of Commons-based Peer Production</a>, DrupalCamp North East 2014 
	      (Sunderland, 25/07/2014). [<a href=\"publications/drupal_cbpp_dcne2014.pdf\">PDF</a>], [<a href=\"publications/drupal_cbpp_dcne2014.odp\">Source (ODP)</a>].<br />
	    - <a href=\"http://www.p2pvalue.eu/blog/12th-march-data-jam-p2pvalue-directory\">Technical details of the P2Pvalue directory</a>, 
          (P2PValue DataJam, 12/03/2014).  [<a href=\"publications/p2pvalue_directory_techn_presentation.pdf\">PDF</a>], [<a href=\"publications/p2pvalue_directory_techn_presentation.odp\">Source (ODP)</a>].<br />
	    - <a href=\"http://2013.drupalcamplondon.co.uk/session/automating-drupal-development-patterns\">Automating Drupal Development with Patterns: introducing 7.x-2.x</a>, DrupalCamp London 2013
          (London, 02/03/2013). [<a href=\"publications/patterns_dclondon2013.pdf\">PDF</a>], [<a href=\"publications/patterns_dclondon2013.odp\">Source (ODP)</a>].<br />
	    - <a href=\"http://2012.drupalcamp.es/es/sesiones/automating-drupal-development-patterns-38\">Automating Drupal Development with Patterns</a> (co-presenting with Hao Liao, from the University of Fribourg), DrupalCamp Spain 2012
          (Madrid, 20/10/2012).  [<a href=\"publications/patterns_dcspain2012.pdf\">PDF</a>], [<a href=\"publications/patterns_dcspain2012.odp\">Source (ODP)</a>].<br />
  	    <b>Dissertations:</b> <br />
	    - Rozas, D (2009). Development and integration of an awareness applications manager into ASTRA. Supervised by Montalvo, S. & Divitini M. 
          (Master's thesis, Universidad Rey Juan Carlos). [<a href=\"publications/Rozas2009.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/tfc\">Source (LaTeX)</a>], [<a href=\"publications/astra_slides.pdf\">Slides (PDF)</a>].<br />
  	    - Rozas, D (2007). gTurnos: Turns manager under Moodle platform. Supervised by Centeno, J. 
          (Bachelor's thesis, Universidad Rey Juan Carlos). [<a href=\"publications/Rozas2007.pdf\">PDF</a>], [<a href=\"https://github.com/drozas/pfc\">Source (LaTeX)</a>], [<a href=\"publications/gturnos_slides.pdf\">Slides (PDF)</a>]..<br />
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
