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

	$honors_and_awards = "

	    <b>Visiting fellowships:</b> <br />
        - 2015: Centro Studi di Etnografia Digitale, University of Milan<br />

	    <b>Speaker (academic conferences):</b> <br />
        - <a href=\"http://www.egosnet.org/jart/prj3/egos/main.jart?rel=de&reserve-mode=active&content-id=1392376003637&subtheme_id=1368705967560\">Drupal as a runaway object: conceptualisation of peer production activities through Activity Theory</a>. EGOS (European Group for Organizational Studies) 2015 Annual Conference (Athens, 04/07/2015) [<a href=\"publications/egos_2015_drupal_runaway_object.pdf\">PDF</a>], [<a href=\"publications/egos_2015_drupal_runaway_object.odp\">Source (ODP)</a>]<br />
        - Contribution beyond source code in Free/Libre Open Source Software: the role of affective labour in the Drupal community. BSA 2015 Annual Conference (Glasgow, 15/04/2015). British Sociological Association. [<a href=\"publications/bsa_2015_contribution_beyond_source_code.pdf\">PDF</a>], [<a href=\"publications/bsa_2015_contribution_beyond_source_code.odp\">Source (ODP)</a>]<br />
	    - <a href=\"http://www.opensym.org/2014/08/11/opensym-doctoral-symposium-with-keynote-on-a-strange-animal-called-peer-reviewed-publishing/\">Drupal as a Commons-Based Peer Production community:
          a sociological perspective</a>, Doctoral Symposium, OpenSym 2014
          (Berlin, 26/08/2014). [<a href=\"publications/drupal_cbpp_opensym2014.pdf\">PDF</a>], [<a href=\"publications/drupal_cbpp_opensym2014.odp\">Source (ODP)</a>]<br />

	    <b>Keynote speaker (seminars, unconferences, non-academic events, etc.):</b> <br />
	    - <a href=\"https://events.drupal.org/barcelona2015/sessions/talk-silver-code-gold-contribution-beyond-source-code-drupal\">Talk is silver, code is gold? Contribution beyond source code in Drupal</a>, DrupalCon Europe 2015
	      (Barcelona, 24/09/2015). [<a href=\"publications/drupalcampnorth_2015.pdf\">PDF</a>], [<a href=\"publications/drupalcampnorth_2015.odp\">Source (ODP) </a>] [<a href=\"https://www.youtube.com/watch?v=TdEVaOjL20s\" target=\"_blank\">Video</a>]
			  <br /> Reviews at blog posts from the community: [<a href=\"http://purkiss.com/blog/steve-purkiss/2015/09/25/remote-drupalcon-day-3\">1</a>]<br />
	    - <a href=\"http://drupalcampnorth.org/session/keynote-talk-silver-code-gold-contribution-beyond-source-code-drupal\">Talk is silver, code is gold? Contribution beyond source code in Drupal</a>, DrupalCamp North 2015
	      (Sunderland, 25/07/2015). [<a href=\"publications/drupalcampnorth_2015.pdf\">PDF</a>], [<a href=\"publications/drupalcampnorth_2015.odp\">Source (ODP)</a>]
			  <br /> Reviews at blog posts from the community: [<a href=\"https://microserve.io/blogs/drupalcamp-north-2015\">1</a>], [<a href=\"http://www.hashbangcode.com/blog/drupalcamp-north-2015-review\">2</a>],
			 [<a href=\"http://www.amazeelabs.com/en/impressions-drupalcamp-north-2015\">3</a>], [<a href=\"http://www.imaginecreativity.co.uk/blog/drupal-camp-north-why-we-loved-it\">4</a>]<br />

	    <b>Speaker (seminars, unconferences, non-academic events, etc.):</b> <br />
  	    - Talk is silver, code is gold? Contribution beyond source code in Free/Libre Open Source Software communities. Seminar at <a href=\"http://www.etnografiadigitale.it/\">Centro Studi Etnografia Digitale</a> (University of Milan) and Viralbeat (Milan, 16/07/2015).
			[<a href=\"publications/unimi_viralbeat_seminar.pdf\">PDF</a>], [<a href=\"publications/unimi_viralbeat_seminar.odp\">Source (ODP)</a>]<br />
		- Speaker at <a href=\"http://2015.caps-conference.eu\">CAPS (Collective Awareness Platforms for Sustainability and Social Innovation and objective) annual conference</a> (Brussels, 2015). Intervention in the panel \"The Value of (Digital) Social Innovation: How to Decribe It and How to Support Its Growth\"; and presenter in the talk \"P2Pvalue Directory: Using a Unique Open Resource for Research and Networking\".
          (Brussels, 07/07/2015). [<a href=\"publications/caps2015_p2pvalue_social_innovation.pdf\">PDF 1</a>], [<a href=\"publications/caps2015_p2pvalue_social_innovation.odp\">Source 1(ODP)</a>], [<a href=\"publications/caps2015_p2pvalue_dir_technical.pdf\">PDF 2</a>], [<a href=\"publications/caps2015_p2pvalue_dir_technical.odp\">Source 2(ODP)</a>]<br />
	    - Talk is silver, code is gold? Contribution beyond source code in Drupal, Drupal Show and Tell - Clarence Centre at London South Bank University
          (London, 21/05/2015). [<a href=\"publications/drupal_ldn_show_and_tell_15.pdf\">PDF</a>], [<a href=\"publications/drupal_ldn_show_and_tell_15.odp\">Source (ODP)</a>]<br />
  	    - Talk is silver, code is gold? Contribution beyond source code in Free/Libre Open Source Software communities, PGR Seminar - School of Social Sciences at University of Surrey
          (Guildford, 25/03/2015). [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.pdf\">PDF</a>], [<a href=\"publications/pgr_seminar_15_contribuion_beyond_source_code.odp\">Source (ODP)</a>]<br />
	    - <a href=\"http://camp.drupalne.org/session/drupal-case-commons-based-peer-production\">Drupal as a case of Commons-based Peer Production</a>, DrupalCamp North East 2014
	      (Sunderland, 25/07/2014). [<a href=\"publications/drupal_cbpp_dcne2014.pdf\">PDF</a>], [<a href=\"publications/drupal_cbpp_dcne2014.odp\">Source (ODP)</a>]<br />
	    - <a href=\"http://www.p2pvalue.eu/blog/12th-march-data-jam-p2pvalue-directory\">Technical details of the P2Pvalue directory</a>,
          (P2PValue DataJam, 12/03/2014).  [<a href=\"publications/p2pvalue_directory_techn_presentation.pdf\">PDF</a>], [<a href=\"publications/p2pvalue_directory_techn_presentation.odp\">Source (ODP)</a>] [<a href=\"https://youtu.be/IRE7D1CHamQ?t=1h17m34s\" target=\"_blank\">Video</a>]<br />
	    - <a href=\"http://2013.drupalcamplondon.co.uk/session/automating-drupal-development-patterns\">Automating Drupal Development with Patterns: introducing 7.x-2.x</a>, DrupalCamp London 2013
          (London, 02/03/2013). [<a href=\"publications/patterns_dclondon2013.pdf\">PDF</a>], [<a href=\"publications/patterns_dclondon2013.odp\">Source (ODP)</a>] [<a href=\"https://www.youtube.com/watch?v=6FvLJTivMgs\" target=\"_blank\">Video</a>]<br />
	    - <a href=\"http://2012.drupalcamp.es/es/sesiones/automating-drupal-development-patterns-38\">Automating Drupal Development with Patterns</a> (co-presenting with Hao Liao, from the University of Fribourg), DrupalCamp Spain 2012
          (Madrid, 20/10/2012).  [<a href=\"publications/patterns_dcspain2012.pdf\">PDF</a>], [<a href=\"publications/patterns_dcspain2012.odp\">Source (ODP)</a>] [<a href=\"https://vimeo.com/61432578\" target=\"_blank\">Video</a>]<br />

	    <b>Awards:</b> <br />
	    - 2010: Gold Award at \"Computer Science Course in JEE platform - An industry Perspective\", Infosys, Mysore (India)<br />
	    - 2008: Academic excellence grant, Comunidad de Madrid<br />
	    - 2007: Erasmus excellence scholarship, Caja Madrid<br />

	    <b>Media:</b> <br />
	    - 2015:<br />
			-- Interview about the P2Pvalue project at CORDIS (Community Research and Development Information Service) [<a href=\"http://cordis.europa.eu/news/rcn/123585_en.html\" target=\"_blank\">Link</a>]<br />
			-- Personal interview in Universidad Rey Juan Carlos' Alumni Magazine (pp. 10-15) [<a href=\"http://www.unipedia.es/urjc/alumni/RevistaN12/\" target=\"_blank\">Link</a>]<br />
	    - 2014: Article about the CBPP directory in WIRED magazine [<a href=\"http://www.wired.com/2014/03/directory-commons-based-peer-production/\" target=\"_blank\">Link</a>]<br />
			- 2010: Group interview in a Spanish TV programme during the participation in the trainee programme at Infosys' Global Education Centre in Mysore (India) [<a href=\"https://www.youtube.com/watch?v=VD8kVvoMZ3U\" target=\"_blank\">Video 1</a>] [<a href=\"https://www.youtube.com/watch?v=Uw516Gl86PE\" target=\"_blank\">Video 2</a>]<br />


	";

	$contact = "For a list of academic publications, please visit <a href=\"publications.php\">\"Publications\"</a>. <br />If you need a full version of my CV or any reference letter, please <a href=\"mailto:david.rozas@gmail.com\">send me an e-mail</a>, indicating your preferred document format (.pdf, .odt, .doc, ...) and language (English or Spanish). You can also send me
				a connection request through <a href=\"http://uk.linkedin.com/in/drozas\" target=\"_blank\">LinkedIn</a>, where I keep an updated version of my CV." ;


	//drozas: This will be in a db or at least a file
	$items = array(		array(
	    "Short CV", $work_and_education
	    ,
	    "Currículum resumido", $work_and_education
	),
    array(
        "Honours and awards", $honors_and_awards
        ,
        "Honours and awards", $honors_and_awards
    ),
    array(
	    "Full CV and further information", $contact
	    ,
	    "Full CV and further information", $contact
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
