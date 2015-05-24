<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	//drozas: Process publications as a list, and in a single language
	$work_and_education = "
        <b>Current positions:</b> <br />
        - 2013 ~ 2016 (expected): PhD candidate, University of Surrey<br />
	    - 2013 ~ present: Posgraduate researcher, Centre for Research in Social Simulation (University of Surrey), FP7 EU <a href=\"http://www.p2pvalue.eu\" target=\"_blank\"> P2Pvalue</a><br />
  	    
	    <b>Previous positions</b> <br />
	    - 2012 ~ 2013: Research assistant, Centre for Research in Social Simulation (University of Surrey), FP7 EU <a href=\"http://www.qlectives.eu\" target=\"_blank\">QLectives</a><br />
	    - 2010 ~ 2012: Project Manager & Drupal developer, <a href=\"http://www.educatic.es\" target=\"_blank\">Educatic</a><br />
  	    - 2009: Research assistant, Department of Computer and Information Science (Norges Teknisk-Naturvitenskapelige Universitet), FP6 EU <a href=\"http://cordis.europa.eu/project/rcn/80445_en.html\" target=\"_blank\">ASTRA</a><br />	    
  	    - 2008: Research assistant, Department of Computer and Information Science (Norges Teknisk-Naturvitenskapelige Universitet), FP6 EU <a href=\"http://cordis.europa.eu/project/rcn/80445_en.html\" target=\"_blank\">ASTRA</a><br />	      
  	    - 2006: PHP developer, <a href=\"http://www.solusoft.es\" target=\"_blank\">Solusoft</a><br />
	    
	    <b>Education:</b> <br />
	    - 2007 ~ 2009 : MSc in Computer Science, Universidad Rey Juan Carlos and Norges Teknisk Naturvitenskapelige Universitet (Erasmus)<br />
	    - 2002 ~ 2007: BSc in Computer Science, Universidad Rey Juan Carlos<br />
	";
	
	$rest = "
	    	  
	    <b>Visiting fellowships:</b> <br />
        - 2015: Centro Studi di Etnografia Digitale, University of Milan<br />
	    
	    <b>Speaker (academic conferences):</b> <br />
        - Drupal as a runaway object: conceptualisation of peer production activities through Activity Theory (forthcoming). EGOS (European Group for Organizational Studies) 2015 Annual Conference (Athens, 04/07/2015) [PDF], [Source (ODP)]<br />
        - Contribution beyond source code in Free/Libre Open Source Software: the role of affective labour in the Drupal community. BSA 2015 Annual Conference (Glasgow, 15/04/2015). British Sociological Association. [PDF], [Source (ODP)]<br />
	    - <a href=\"http://www.opensym.org/2014/08/11/opensym-doctoral-symposium-with-keynote-on-a-strange-animal-called-peer-reviewed-publishing/\">Drupal as a Commons-Based Peer Production community:
          a sociological perspective</a>, Doctoral Symposium, OpenSym 2014
          (Berlin, 26/08/2014). [<a href=\"publications/drupal_cbpp_opensym2014.pdf\">PDF</a>], [<a href=\"publications/drupal_cbpp_opensym2014.odp\">Source (ODP)</a>]<br />
	  
	    <b>Speaker (seminars, unconferences, non-academic events, etc.):</b> <br />
	    - Talk is silver, code is gold? Contribution beyond source code in Drupal, Drupal Show and Tell - Clarence Centre at London South Bank University
          (London, 21/05/2015). [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.pdf\">PDF</a>], [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.odp\">Source (ODP)</a>]<br />
  	    - Talk is silver, code is gold? Contribution beyond source code in Free/Libre Open Source Software communities, PGR Seminar - School of Social Sciences at University of Surrey
          (Guildford, 25/03/2015). [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.pdf\">PDF</a>], [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.odp\">Source (ODP)</a>]<br />
	    - <a href=\"http://camp.drupalne.org/session/drupal-case-commons-based-peer-production\">Drupal as a case of Commons-based Peer Production</a>, DrupalCamp North East 2014
	      (Sunderland, 25/07/2014). [<a href=\"publications/drupal_cbpp_dcne2014.pdf\">PDF</a>], [<a href=\"publications/drupal_cbpp_dcne2014.odp\">Source (ODP)</a>]<br />
	    - <a href=\"http://www.p2pvalue.eu/blog/12th-march-data-jam-p2pvalue-directory\">Technical details of the P2Pvalue directory</a>,
          (P2PValue DataJam, 12/03/2014).  [<a href=\"publications/p2pvalue_directory_techn_presentation.pdf\">PDF</a>], [<a href=\"publications/p2pvalue_directory_techn_presentation.odp\">Source (ODP)</a>] [Video]<br />
	    - <a href=\"http://2013.drupalcamplondon.co.uk/session/automating-drupal-development-patterns\">Automating Drupal Development with Patterns: introducing 7.x-2.x</a>, DrupalCamp London 2013
          (London, 02/03/2013). [<a href=\"publications/patterns_dclondon2013.pdf\">PDF</a>], [<a href=\"publications/patterns_dclondon2013.odp\">Source (ODP)</a>] [Video]<br />
	    - <a href=\"http://2012.drupalcamp.es/es/sesiones/automating-drupal-development-patterns-38\">Automating Drupal Development with Patterns</a> (co-presenting with Hao Liao, from the University of Fribourg), DrupalCamp Spain 2012
          (Madrid, 20/10/2012).  [<a href=\"publications/patterns_dcspain2012.pdf\">PDF</a>], [<a href=\"publications/patterns_dcspain2012.odp\">Source (ODP)</a>] [Video]<br />
    
	    <b>Awards:</b> <br />
	    - 2010: Gold Award at \"Computer Science Course in JEE platform - An industry Perspective\", Infosys, Mysore (India)<br />
	    - 2008: Academic excellence grant, Comunidad de Madrid<br />
	    - 2007: Erasmus excellence grant, Caja Madrid<br />

	    <b>Media:</b> <br />
	    - 2015: Interview at Universidad Rey Juan Carlos' Alumni Magazine (pp. 10-15) [Link]<br />
	    - 2010: Interview in a Spanish TV programme during the participation in the trainee programme at Infosys' Global Education Centre in Mysore (India) [Video 1] [Video 2]<br />

	    	  	    	  	    	  
	";
	
	//drozas: This will be in a db or at least a file
	$items = array(		array(
	    "Short CV", $work_and_education
	    ,
	    "Currículum resumido", $work_and_education
	),
    array(
        "Honors and awards", $rest
        ,
        "Honors and awards", $rest
    ) 
	);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
	print_form($form);    
	print_footer();	
?>	
